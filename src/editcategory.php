<?php


require_once '../function/db.php';
$dbh = connect();

$sql = "UPDATE category SET c_name = :category WHERE c_id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_POST['id'], PDO::PARAM_INT);
$stmt->bindValue('category', $_POST['category'], PDO::PARAM_STR);
$stmt->execute();

header('location:..//admin?action=categorys');