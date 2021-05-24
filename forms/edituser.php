<?php

$sql = "SELECT * FROM users
        LEFT JOIN status ON status_id = s_id
        WHERE id = :id";
$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch();



$sql = "SELECT * FROM status";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$editUsers = $stmt->fetchAll();

?>

<section id="edituser" class="container">

    <div class="row">
        <div class="col-md-8 offset-2">
            <h2 class="display-5 my-5">Modifier un utilisateur</h2>
            <form action="src/edituser.php" method="post" class="mt-4">
                <div class="form-group">
                    <label for="profil" class="form-label">Photo de profil</label>
                    <input type="text" class="form-control" id="profil" name="profil" value="<?= $user->profil ?>">
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user->name ?>">
                </div>
                <div class="form-group">
                    <label for="first" class="form-label">Prénom de l'utilisateur</label>
                    <input type="text" class="form-control" id="first" name="first" value="<?= $user->first_name ?>">
                </div>
                <div class="form-group">
                    <label for="status" class="form-label">Statut de l'utilisateur</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="">Sélectionnez...</option>
                        <?php foreach($editUsers as $users): ?>
                            <option value="<?= $users->s_id ?>" <?= $user->status_id == $users->s_id ? 'selected' : '' ?>><?= $users->s_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $user->email ?>">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?= $user->password ?>">
                </div>
                <!-- Champ caché avec l'id du site pour l'update -->
                <input type="hidden" value="<?=$user->id ?>" name="id">
                <input type="submit" class="btn form-btn mt-3" value="Modifier">
            </form>
        </div>
    </div>
</section>