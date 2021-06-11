<?php

require_once '../function/db.php';

$dbh = connect();
session_start();

if ($_SESSION['status'] !== "Big Boss" ) {
    header('location: ../');
}

$sql = "DELETE FROM users WHERE id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();

if($_SESSION['id'] == $_GET['id']) {
    session_unset();
    session_destroy();
    header('location: ../');
} else {
    header('location:../admin?action=users');
}
