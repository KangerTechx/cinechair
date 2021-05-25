<?php

require_once '../function/db.php';
$dbh = connect();

$sql = "UPDATE users SET profil = :profil WHERE id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_POST['id'], PDO::PARAM_INT);
$stmt->bindValue('profil', $_FILES['newProfil']['name']);

$stmt->execute();

if (!empty($_FILES['newProfil']['name'])) {
    if(move_uploaded_file($_FILES['newProfil']['tmp_name'], '../assets/img/profil/'.$_FILES['newProfil']['name'])) {
        header('location: ../');
    } else {
        echo 'Le fichier n\'a pas pu être téléchargé';
    }
} else {
    header('location: ../?page=user');
}
