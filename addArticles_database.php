<?php
session_start();
include('infos_admin_database.php');
include('connection_database.php');

$create_articles = $bdd->prepare('INSERT INTO billets(titre,contenu) VALUES(:titre,:contenu)');
$create_articles->bindParam(':titre', $_POST['titleArticle']);
$create_articles->bindParam(':contenu', $_POST['contentArticle']);
$create_articles->execute();
?>