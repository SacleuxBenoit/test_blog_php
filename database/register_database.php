<?php
session_start();
include('../infos_admin_database.php');
include('connection_database.php');

$find_pseudo_database = $bdd->prepare('SELECT pseudo FROM user WHERE pseudo = :pseudo');
$find_pseudo_database->bindParam(':pseudo', $_POST['registerPseudo']);
$find_pseudo_database->execute();
$find_pseudo = $find_pseudo_database->fetch();

if(!empty($_POST['registerPseudo']) && !empty($_POST['registerPassword']) && $_POST['registerPseudo'] != $find_pseudo['pseudo']){
    $password_hash = password_hash($_POST['registerPassword'], PASSWORD_DEFAULT);

    $create_user = $bdd->prepare('INSERT INTO user(pseudo,passwordUser) VALUES(:pseudo,:passwordUser)');
    $create_user->bindParam(':pseudo', $_POST['registerPseudo']);
    $create_user->bindParam(':passwordUser', $password_hash);
    $create_user->execute();
    header('Location: ../loginAndRegister.php');
}else{
    header('Location: ../loginAndRegister.php');
}

?>