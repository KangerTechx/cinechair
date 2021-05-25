<?php

require_once '../function/db.php';
$dbh = connect();

$sql = "UPDATE bluray SET cover = :cover, name = :name, price = :price, type_id = :type, cat_id = :category, release_date = :date, note = :note, description = :description WHERE id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_POST['id'], PDO::PARAM_INT);
$stmt->bindValue('cover', !empty($_FILES['newCover']['name']) ? $_FILES['newCover']['name'] : $_POST['cover']);
$stmt->bindValue('name', $_POST['name'], PDO::PARAM_STR);
$stmt->bindValue('price', $_POST['price'], PDO::PARAM_INT);
$stmt->bindValue('type', $_POST['type'], PDO::PARAM_INT);
$stmt->bindValue('category', $_POST['category'], PDO::PARAM_INT);
$stmt->bindValue('date', $_POST['date'], PDO::PARAM_STR);
$stmt->bindValue('note', $_POST['note'], PDO::PARAM_INT);
$stmt->bindValue('description', $_POST['description'], PDO::PARAM_STR);


$stmt->execute();

if (!empty($_FILES['newCover']['name'])) {
    if(move_uploaded_file($_FILES['newCover']['tmp_name'], '../assets/img/cover/'.$_FILES['newCover']['name'])) {
        header('location: ../admin.php');
    } else {
        echo 'Le fichier n\'a pas pu être téléchargé';
    }
} else {
    header('location: ../admin.php');
}