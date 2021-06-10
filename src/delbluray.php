<?php

require_once '../function/db.php';

$dbh = connect();

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