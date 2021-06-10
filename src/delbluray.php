<?php

require_once '../function/db.php';

$dbh = connect();

session_start();

if(empty($_SESSION['status'])) {
    header('location: ../cinechair/?page=login');
} elseif ($_SESSION['status'] == 'Utilisateur') {
    header('location: ../cinechair/');
}

$sql= "SELECT id, cover FROM bluray WHERE id =:id";
$stmt=$dbh->prepare($sql);
$stmt->bindValue('id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$cover = $stmt->fetch();


$sql = "DELETE FROM bluray WHERE id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();

if($cover->cover !== 'default.svg') {
    unlink('../assets/img/cover/'.$cover->cover);
}

header('location:../admin.php');