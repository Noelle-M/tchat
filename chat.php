<?php
session_start();
include('../../msf/includes/db.php');

$id = $_SESSION['auth']['id'];
$membres = $db->prepare('SELECT * FROM membres WHERE id=:id');
$membres->bindValue(':id',$id,PDO::PARAM_STR);
$membres->execute();
$prenoms = $membres->fetch();
$prenom = $prenoms['prenom'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="../../../asset/css/style.css">
        <script src="https://kit.fontawesome.com/66db8c542e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../../asset/css/app.css">
    </head>
    <body class="body-chat">
        <div class="header">
            <h1>MySpaceFamily 2.0</h1>
            <p class="text-center txt-bureau">Chat's Family</p>
        </div> <!-- END HEADER -->
            <section class="chat card w-50">
                <div class="messages" style="">
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