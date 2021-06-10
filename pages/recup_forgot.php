<?php

    $sql = "SELECT email, q_name, reply FROM users 
            LEFT JOIN secret_query ON query_id = q_id
            WHERE email = :email";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue('email', $_POST['email'], PDO::PARAM_STR);
    $stmt->execute();
    $mail = $stmt->fetch();

?>
<section class="mt-5">
    <h2 class="display-5 ms-5">Récupération du mot de passe</h2>
<?php if($mail) : ?>
    <form action="src/recup.php" method="post" class="form">
        <div class="mb-3 col-md-7 col-lg-5">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $mail->email?>">
        </div>
        <div class="mb-3 col-md-7 col-lg-5">
            <label for="question" class="form-label">Question secrète</label>
            <input type="text" class="form-control" id="question" name="question" value="<?= $mail->q_name ?>">
        </div>

        <div class="mb-3 col-md-7 col-lg-5">
            <label for="reply" class="form-label">Réponse secrète </label>
            <input type="text" class="form-control" id="reply" name="reply">
        </div>

        <button type="submit" class="btn">Récuparation</button>
    </form>
<?php else : ?>
    <p class="ms-5">Adresse email inconnue</p>
<?php endif ?>
</section>

<