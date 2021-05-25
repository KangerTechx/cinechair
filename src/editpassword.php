<?php

require_once '../function/db.php';
require_once '../function/function.php';
$dbh = connect();

$sql = "SELECT id, password FROM users WHERE id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_POST['id'], PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch();

if (password_verify($_POST['password'], $user->password)) {
    if($_POST['newPassword'] == $_POST['confPassword']) {
        $sql = "UPDATE users SET password = :password WHERE id = :id";

        $stmt = $dbh->prepare($sql);
        $stmt->bindValue('id', $_POST['id'], PDO::PARAM_INT);
        $stmt->bindValue('password', password_hash(cleaner($_POST['newPassword']), PASSWORD_DEFAULT), PDO::PARAM_STR);

        $stmt->execute();

        header('location: ../');
    } else {
        header('location: ../?page=error&err=02');
    }
} else {
    header('location: ../?page=error&err=01');
}