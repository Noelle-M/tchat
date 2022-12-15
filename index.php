<?php
session_start();
include('includes/db.php');

$id = 3;
$membres = $db->prepare('SELECT * FROM user WHERE id=:id');
$membres->bindValue(':id',$id,PDO::PARAM_STR);
$membres->execute();
$prenoms = $membres->fetch();
$prenom = $prenoms['prenom'];

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="../../../asset/css/style.css">
        <script src="https://kit.fontawesome.com/66db8c542e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../../asset/css/app.css">
    </head>
    <body class="body-chat">
        <div class="header w-75 mx-auto">
            <h1>MyChat</h1>
            <p class="text-center txt-bureau">Chat's Family</p>
        </div> <!-- END HEADER -->
            <section class="chat card w-50 mx-auto shadow">
                <div class="messages">
                </div>
                <div class="user-inputs">
                    <form action="handler.php?task=write" method="POST">
                        <input type="hidden" name="author" id="author" value="<?= $prenom ?>">
                        <br/>
                        <hr>
                        <input type="text" id="content" name="content" placeholder="Message" class="w-50 input-chat" style="border: 2px solid darkorange;padding: 15px; border-radius:15px;">

                        <button type="submit" class="btn btn-warning"><i class="fas fa-paw text-white 5x"></i></button>
                    </form>
                </div>
            </section>
            <script src="js/app.js"></script>
    </body>
</html>