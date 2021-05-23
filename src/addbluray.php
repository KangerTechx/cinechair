<?php

require_once '../function/db.php';
$dbh = connect();

$sql = "INSERT INTO bluray (name, type_id, cat_id, price, release_date, note, cover, description) VALUES (:name, :type, :category, :price, :date, :note, :cover, :description)";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('name', $_POST['name'], PDO::PARAM_STR);
$stmt->bindValue('type', $_POST['type'], PDO::PARAM_INT);
$stmt->bindValue('category', $_POST['category'], PDO::PARAM_INT);
$stmt->bindValue('price', $_POST['price'], PDO::PARAM_INT);
$stmt->bindValue('date', $_POST['date'], PDO::PARAM_STR);
$stmt->bindValue('note', $_POST['note'], PDO::PARAM_INT);
$stmt->bindValue('cover', $_POST['cover'], PDO::PARAM_STR);
$stmt->bindValue('description', $_POST['description'], PDO::PARAM_STR);

$stmt->execute();

header('location:../admin.php');