<?php
session_start();
require_once '../function/db.php';
$dbh = connect();

$sql = "SELECT * FROM users 
        LEFT JOIN status ON status_id = s_id
        LEFT JOIN secret_query ON query_id = q_id
        WHERE email = :email";
$stmt=$dbh->prepare($sql);
$stmt->bindValue('email', $_POST['email'], PDO::PARAM_STR);
$stmt->execute();
$login = $stmt->fetch();

$sql = "UPDATE users SET profil = :profil WHERE id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_POST['id'], PDO::PARAM_INT);
$stmt->bindValue('profil', $_FILES['newProfil']['name']);

$stmt->execute();

if (!empty($_FILES['newProfil']['name'])) {
    if(move_uploaded_file($_FILES['newProfil']['tmp_name'], '../assets/img/profil/'.$_FILES['newProfil']['name'])) {

        unset($_SESSION['profil']);
        $_SESSION += ['profil' => $_FILES['newProfil']['name']];

        header('location: ../');
    } else {
        echo 'Le fichier n\'a pas pu être téléchargé';
    }
} else {
    header('location: ../?page=user');
}
