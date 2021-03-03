<?php
session_start();
include('../infos_admin_database.php');
include('connection_database.php');

$find_user_database = $bdd->prepare('SELECT id,pseudo,passwordUser FROM user WHERE pseudo = :pseudo');
$find_user_database->bindParam(':pseudo', $_POST['loginPseudo']);
$find_user_database->execute();
$find_user = $find_user_database->fetch();

// $_SESSION USER
$_SESSION['id_user'] = $find_user['id'];
$_SESSION['loginPseudo'] = $_POST['loginPseudo'];

if($_POST['loginPseudo'] == $find_user['pseudo'] && password_verify($_POST["loginPassword"],$find_user['passwordUser'])){
    header('Location: ../index.php');
}

?>