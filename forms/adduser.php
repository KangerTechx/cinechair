<?php

$sql = "SELECT * FROM secret_query";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$queries = $stmt->fetchAll();


$sql = "SELECT * FROM status";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$status = $stmt->fetch();
?>

<section id="adduser">

    <div class=" row container">
        <div class="col-11 offset-1 col-md-8 offset-md-2">
            <h2 class="display-5 my-5">Création de compte</h2>
            <form action="src/adduser.php" method="post">
                <input type="hidden" value="profil.svg" name="profil">
                <input type="hidden" value="2" name="status">
                <div class="form-group">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="first" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="first" name="first" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="text" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="query" class="form-label">Question secrète</label>
                    <select name="query" id="query" class="form-control" required>
                        <option value="">Sélectionnez...</option>
                        <?php foreach($queries as $query): ?>
                            <option value="<?= $query->q_id ?>"><?= $query->q_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="reply" class="form-label">Réponse secrète</label>
                    <input type="text" class="form-control" id="reply" name="reply" required>
                </div>
                <input type="submit" class="btn form-btn mt-3" value="S'incrire">
            </form>
        </div>
    </div>
</section>
