<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="../../../asset/css/style.css">
        <script src="https://kit.fontawesome.com/66db8c542e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../../asset/css/app.css">
        <link rel="stylesheet" href="../../../asset/css/app.css">
    </head>
    <body class="body-chat">
        <div class="header">
            <h1>MySpaceFamily 2.0</h1>
            <p class="text-center txt-bureau">Chat's Family</p>
        </div> <!-- END HEADER -->
            <section class="chat card">
                <div class="messages">
                </div>
                <div class="user-inputs">
                    <form action="handler.php?task=write" method="POST">
                        <input type="text" name="author" id="author" placeholder="Nickname ?">
                        <input type="text" id="content" name="content" placeholder="Type in your message right here bro !">
                        <button type="submit">🔥 Send !</button>
                    </form>
                </div>
            </section>
            <script src="js/app.js"></script>
    </body>
</html>