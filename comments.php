<?php
session_start();
include('infos_admin_database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('connection_database.php');

        $get_ticket = $bdd->prepare('SELECT id,titre,contenu FROM billets WHERE id = ?');
        $get_ticket->execute(array($_GET['billet']));
        $content = $get_ticket->fetch();
    ?>

    <div>
        <h3><?php echo htmlspecialchars($content['titre']) ?></h3>

        <p><?php echo htmlspecialchars($content['contenu']) ?></p>
    </div>
    
    <p>Commentaires :</p>

    <?php 
        $get_ticket->closeCursor();
        $get_comments = $bdd->prepare('SELECT id_billet,auteur,commentaire FROM comments WHERE id_billet = ?');
        $get_comments->execute(array($_GET['billet']));
        
        while($display_comment = $get_comments->fetch()){
            ?>
                <div class="comments">
                <p><strong><?php echo $display_comment['auteur']?></strong></p>
                <p><?php echo $display_comment['commentaire'] ?></p>
                </div>
            <?php
        }
    ?>

    <div>
        <h3>Ajouter un commentaire</h3>
        
        <form action="addComments_database.php?billet=<?php echo $_GET['billet']?>" method="POST">
            <p>
                <label for="author">Auteur :</label>
                <input type="text" name="author" id="author">
            </p>

            <p>
                <label for="comments">Commentaire :</label>
                <input type="text" name="comments" id="comments">
            </p>

            <input type="submit" value="Submit">
        </form>
    </div> 
</body>
</html>