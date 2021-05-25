<?php

require_once '../function/db.php';

$dbh = connect();

$sql = "DELETE FROM users WHERE id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();

header('location:../admin?action=users');