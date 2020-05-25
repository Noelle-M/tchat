<?php
session_start();
try
{
$db = new PDO('mysql:host=localhost;dbname=msf', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$task = "list";

if(array_key_exists("task", $_GET)){
    $task = $_GET['task'];
}

if($task == "write"){
    postMessage();
}else{
    getMessages();
}

function getMessages(){
    global $db;

    $resultats = $db->query('SELECT * FROM tchat ORDER BY creat_at LIMIT 50');

    $messages = $resultats->fetchAll();

    echo json_encode($messages);
}

function postMessage(){
    global $db;

    if(!array_key_exists('author', $_POST) || !array_key_exists('content', $_POST)){
        echo json_encode(["statuts" => "error", "message" => "Vous n'avez saisi aucun message"]);
        return;
    }

    $author = $_POST['author'];
    $content = $_POST['content'];

    $query = $db->prepare('INSERT INTO tchat SET author = :author, content = :content, creat_at = now()');

    $query->execute(["author" => $author, "content" => $content]);

    echo json_encode(["statuts" => "success"]);
}