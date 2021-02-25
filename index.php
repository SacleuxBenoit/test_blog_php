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
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('connection_database.php');

        $get_ticket = $bdd->query('SELECT id,titre,contenu,descArticles FROM billets');

        while($content = $get_ticket->fetch()){
        ?>
            <div class="container">
                <h3><?php echo htmlspecialchars($content['titre']) ?></h3>

                <p class="content"><?php echo htmlspecialchars($content['descArticles']) ?></p>

                <p class="content"><a href="comments.php?billet=<?php echo htmlspecialchars($content['id']);?>">see more</a></p>
            </div>
        <?php
        }
    ?>  
</body>
</html>