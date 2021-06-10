<?php
session_start();

if(empty($_SESSION['status'])) {
    header('location: ../cinechair/?page=login');
}
require_once '../function/db.php';
$dbh = connect();



$sql = "SELECT id, profil FROM users 
        WHERE id = :id";
$stmt=$dbh->prepare($sql);
$stmt->bindValue('id', $_POST['id'], PDO::PARAM_STR);
$stmt->execute();
$login = $stmt->fetch();

$sql = "UPDATE users SET profil = :profil WHERE id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_POST['id'], PDO::PARAM_INT);
$stmt->bindValue('profil', $_FILES['newProfil']['name']);

$stmt->execute();

if (!empty($_FILES['newProfil']['name'])) {
    if(move_uploaded_file($_FILES['newProfil']['tmp_name'], '../assets/img/profil/'.$_FILES['newProfil']['name'])) {
        $_SESSION['profil'] = $_FILES['newProfil']['name'];
        if($login->profil !== 'profil.svg') {
            unlink('../assets/img/profil/'.$login->profil);
        }
        header('location: ../');
    } else {
        echo 'Le fichier n\'a pas pu être téléchargé';
    }
} else {
    header('location: ../?page=user');
}
