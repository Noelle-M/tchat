<?php
session_start();
$annee_en_cours = date('Y');
$mois_en_cours = date('m');
$jour_en_cours = date('d');
?>

<body class="body-chat">
    <?php
    if(isset($_SESSION['auth']))
    {
        include ('../msf/includes/db.php');

        $id = $_SESSION['auth']['id'];

        $query = $db ->prepare('SELECT * FROM membres
        WHERE id =:id');
        $query->bindValue(':id',$id,PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch();

    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="../../asset/css/style.css">
    <script src="https://kit.fontawesome.com/66db8c542e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../asset/css/app.css">
    <link rel="stylesheet" href="../../asset/css/circle.css">
    <link rel="stylesheet" href="../app/chat/css/app.css">
    <div class="header">
        <h1>MySpaceFamily 2.0</h1>
        <p class="text-center txt-bureau">Family's Chat</p>
    </div> <!-- END HEADER -->

    <div class="main-app">
        <div class="card w-80 h-80 ml-5">
            <section class="chat">
               <!--
                <div class="messages">
                    $messages = $db->prepare('SELECT * FROM tchat');
                    $messages->execute();
                    $message = $messages->fetchAll();
                    foreach($message as $key => $value){
                        echo'<div class="message">
                        <span class="date">'.$message[$key]['creat_at'].'</span><br/>
                        <span class="author">'.$message[$key]['author'].'</span> :
                        <span class="content">'.$message[$key]['content'].'</span>
                    </div>';
                    }
                </div>
                 -->

                <div class="message">
                    <span class="date"></span><br/>
                    <span class="author"></span> :
                    <span class="content"></span>
                </div>

                <div class="user-inputs">
                    <form action="../app/chat/handler.php?task=write" method="post">
                        <input type="hidden" class="" name="author" id="author" value="<?= $data['prenom'] ?>">

                        <input id="content" name="content" placeholder="Message" style=width:60%>
                        <br/>
                        <button type="submit" class="btn btn-warning mt-3">Envoyer</button>
                    </form>
                </div>

            </section>
        </div>
    </div>

    <script src="../app/chat/js/app.js"></script>
</body>
<?
    }