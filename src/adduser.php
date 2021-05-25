<?php

require_once '../function/db.php';
require_once '../function/function.php';
$dbh = connect();

$sql = "SELECT email FROM users WHERE email = :email";
$stmt=$dbh->prepare($sql);
$stmt->bindValue('email', $_POST['email']);
$stmt->execute();
$mail = $stmt->fetchAll();





if($mail) {
    header('location: ../?page=error&err=04');
} else {
    $sql = "INSERT INTO users (name, first_name, password, status_id, profil, email, query_id, reply) VALUES (:name, :first, :password, :status, :profil, :email, :query, :reply)";

    $stmt = $dbh->prepare($sql);
    $stmt->bindValue('name', $_POST['name'], PDO::PARAM_STR);
    $stmt->bindValue('first', $_POST['first'], PDO::PARAM_STR);
    $stmt->bindValue('password', password_hash($_POST['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
    $stmt->bindValue('status', $_POST['status'], PDO::PARAM_INT);
    $stmt->bindValue('profil', $_POST['profil'], PDO::PARAM_STR);
    $stmt->bindValue('email', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindValue('query', $_POST['query'], PDO::PARAM_STR);
    $stmt->bindValue('reply', password_hash(cleaner($_POST['reply']), PASSWORD_DEFAULT), PDO::PARAM_STR);
    $stmt->execute();

    header('location:../?page=login');
}