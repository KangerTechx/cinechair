<?php

require_once '../function/db.php';
require_once '../function/function.php';
require_once 'mailer.php';
$dbh = connect();

$sql= "SELECT * FROM USERS WHERE email = :email";


$stmt=$dbh->prepare($sql);
$stmt->bindValue('email', $_POST['email'], PDO::PARAM_STR);
$stmt->execute();
$reply= $stmt->fetch();


if(password_verify($_POST['reply'], $reply->reply)) {
    $newPass = randomPassword();
    $sql = "UPDATE users SET password = :password WHERE email = :email";

    $stmt = $dbh->prepare($sql);
    $stmt->bindValue('password', password_hash($newPass, PASSWORD_DEFAULT), PDO::PARAM_STR);
    $stmt->bindValue('email', $_POST['email'], PDO::PARAM_STR);
    $stmt->execute();

    if(sendMail($_POST['email'], $newPass)) {
        header('location: ../?page=login');
    } else {
        echo 'Mail non envoyé';
    }

} else {
    echo '<p style="margin: 30px; font-size: 1.2rem">Réponse secrète non valide !<br><a href="../?page=forgot">Retour au formulaire de récupération</a></p>';

}