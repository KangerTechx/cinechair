<?php

require_once '../function/db.php';
require_once '../function/function.php';
$dbh = connect();

session_start();

if ($_SESSION['status'] !== "Big Boss" ) {
    header('location: ../cinechair/');
}

$sql = "SELECT email FROM users";
$stmt=$dbh->prepare($sql);
$stmt->execute();
$mails = $stmt->fetchAll();

$sql = "SELECT id, email, profil, password FROM users WHERE id = :id";
$stmt=$dbh->prepare($sql);
$stmt->bindValue('id', $_POST['id'], PDO::PARAM_INT);
$stmt->execute();
$mail = $stmt->fetch();


foreach($mails as $emails) {
    if ($_POST['email'] !== $mail->email && $emails->email == $_POST['email']) {

            header('location: ../?page=error&err=04');

    } else {
        $sql = "UPDATE users 
            SET profil = :profil, name = :name, first_name = :first, password = :password, email = :email, status_id = :status
            WHERE id = :id";

        $stmt = $dbh->prepare($sql);
        $stmt->bindValue('id', $_POST['id'], PDO::PARAM_INT);
        $stmt->bindValue('profil', !empty($_FILES['newProfil']['name']) ? $_FILES['newProfil']['name'] : $mail->profil, PDO::PARAM_STR);
        $stmt->bindValue('name', $_POST['name'], PDO::PARAM_STR);
        $stmt->bindValue('first', $_POST['first'], PDO::PARAM_STR);

        if($mail->password !== $_POST['password']) {
        $stmt->bindValue('password', password_hash(cleaner($_POST['password']), PASSWORD_DEFAULT), PDO::PARAM_STR);
        } else {
            $stmt->bindValue('password', $mail->password);
        }

        $stmt->bindValue('email', $_POST['email'], PDO::PARAM_STR);
        $stmt->bindValue('status', $_POST['status'], PDO::PARAM_INT);
        $stmt->execute();

        if (!empty($_FILES['newProfil']['name'])) {
            if (move_uploaded_file($_FILES['newProfil']['tmp_name'], '../assets/img/profil/' . $_FILES['newProfil']['name'])) {
                $_SESSION['profil'] = $_FILES['newProfil']['name'];
                if ($mail->profil !== 'profil.svg') {
                    unlink('../assets/img/profil/' . $mail->profil);
                }
                header('location:../admin?action=users');
            } else {
                echo 'Le fichier n\'a pas pu être téléchargé';
            }
        } else {
            header('location:../admin?action=users');
        }

        header('location:../admin?action=users');
    }
}
