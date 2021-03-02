<?php
session_start();
include('../infos_admin_database.php');
include('connection_database.php');

$_SESSION['loginPseudo'] = $_POST['loginPseudo'];

$find_user_database = $bdd->prepare('SELECT pseudo,passwordUser FROM user WHERE pseudo = :pseudo');
$find_user_database->bindParam(':pseudo', $_POST['loginPseudo']);
$find_user_database->execute();
$find_user = $find_user_database->fetch();

if($_POST['loginPseudo'] == $find_user['pseudo'] && password_verify($_POST["loginPassword"],$find_user['passwordUser'])){
    header('Location: ../index.php');
}

?>