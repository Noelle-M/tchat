<?php 
 $host_name = 'localhost';
 $database = 'nom_de_votre_bdd';
 $user_name = 'root';
 $password = '';
 $db = null;

 try {
   $db = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
 } catch (PDOException $e) {
   echo "Erreur!:" . $e->getMessage() . "<br/>";
   die();
 }