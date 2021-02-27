<?php
session_start();
include('infos_admin_database.php');
include('./database/connection_database.php');
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
        $get_ticket = $bdd->query('SELECT id,titre,contenu,descArticles FROM billets');

        while($content = $get_ticket->fetch()){
        ?>
        
            <div class="container">
                <h3><a href="comments.php?billet=<?php echo htmlspecialchars($content['id']);?>"><?php echo htmlspecialchars($content['titre']) ?></a></h3>
                <p class="content"><?php echo htmlspecialchars($content['descArticles']) ?></p>
            </div>

        <?php
        }
    ?>  
</body>
</html>