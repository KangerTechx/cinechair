<?php

require_once '../function/db.php';
$dbh = connect();


$sql = "SELECT * FROM users 
        LEFT JOIN status ON status_id = s_id
        WHERE email = :email";
$stmt=$dbh->prepare($sql);
$stmt->bindValue('email', $_POST['email'], PDO::PARAM_STR);
$stmt->execute();
$login = $stmt->fetch();


if($login) {
    if(password_verify($_POST['password'], $login->password)) {
        session_start();
            $_SESSION = [
                'name'          => $login->name,
                'first-name'    => $login->first_name,
                'email'         => $login->email,
                'profil'        => $login->profil,
                'status'        => $login->s_name
            ];


        header('location: ../');

    } else {
        header('location: ../?page=login');
    }
}