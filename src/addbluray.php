<?php

require_once '../function/db.php';
$dbh = connect();
session_start();

if(empty($_SESSION['status'])) {
    header('location: ../cinechair/?page=login');
} elseif ($_SESSION['status'] == 'Utilisateur') {
    header('location: ../cinechair/');
}


$sql = "INSERT INTO bluray (name, type_id, cat_id, price, release_date, note, cover, description) VALUES (:name, :type, :category, :price, :date, :note, :cover, :description)";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('name', $_POST['name'], PDO::PARAM_STR);
$stmt->bindValue('type', $_POST['type'], PDO::PARAM_INT);
$stmt->bindValue('category', $_POST['category'], PDO::PARAM_INT);
$stmt->bindValue('price', $_POST['price'], PDO::PARAM_INT);
$stmt->bindValue('date', $_POST['date'], PDO::PARAM_STR);
$stmt->bindValue('note', $_POST['note'], PDO::PARAM_INT);
$stmt->bindValue('cover', !empty($_FILES['cover']['name']) ? $_FILES['cover']['name'] : 'default.svg');
$stmt->bindValue('description', $_POST['description'], PDO::PARAM_STR);

$stmt->execute();

if (!empty($_FILES['cover']['name'])) {
    if(move_uploaded_file($_FILES['cover']['tmp_name'], '../assets/img/cover/'.$_FILES['cover']['name'])) {
        header('location: ../admin.php');
    } else {
        echo 'Le fichier n\'a pas pu être téléchargé';
    }
} else {
    header('location: ../admin.php');
}