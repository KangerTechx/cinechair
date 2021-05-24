<?php

require_once '../function/db.php';
$dbh = connect();

$sql = "UPDATE users SET profil = :profil, name = :name, first_name = :first, password = :password, email = :email, status_id = :status
WHERE id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_POST['id'], PDO::PARAM_INT);
$stmt->bindValue('profil', $_POST['profil'], PDO::PARAM_STR);
$stmt->bindValue('name', $_POST['name'], PDO::PARAM_STR);
$stmt->bindValue('first', $_POST['first'], PDO::PARAM_STR);
$stmt->bindValue('password', password_hash($_POST['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
$stmt->bindValue('email', $_POST['email'], PDO::PARAM_STR);
$stmt->bindValue('status', $_POST['status'], PDO::PARAM_INT);
$stmt->execute();

header('location:../admin?action=users');