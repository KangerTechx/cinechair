<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function sendMail($mail, $newPassword) {
    $mailheader = '';
    $to = $mail;

    $mailheader.='From: CineChair <info@cinechair.com>'."\r\n".'Reply-To: <info@cinechair.com>'."\r\n";


    $temp_subject = test_input('Récupération du mot de passe');

    $subject = $temp_subject;


    $temp_content = test_input('Votre nouveau mot de passe est :'. $newPassword);

    $content = wordwrap($temp_content,69, '\n', true);


    $mailSent = mail($to, 'info@cinechair.com', $content, $mailheader);

    if ($mailSent) {
        return true;
    } else {
        die('Une erreur s\'est produite lors de l\'envoi');
    }
}