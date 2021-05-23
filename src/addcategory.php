<?php


require_once '../function/db.php';
$dbh = connect();

$sql = "INSERT INTO category (c_name) VALUES (:category)";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('category', $_POST['category'], PDO::PARAM_STR);

$stmt->execute();

header('location:..//admin?action=categorys');