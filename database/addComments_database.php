<?php 
session_start();
include('../infos_admin_database.php');
include('connection_database.php');

if(!empty($_POST['comments'])){
    $send_comments = $bdd->prepare('INSERT INTO comments(id_billet,auteur,commentaire) VALUES(:id_billet,:author,:comments)');
    $send_comments->bindParam(':id_billet', $_GET['billet']);
    $send_comments->bindParam(':author', $_SESSION['loginPseudo']);
    $send_comments->bindParam(':comments', $_POST['comments']);
    $send_comments->execute();
    header('Location: ../index.php');
}

?>