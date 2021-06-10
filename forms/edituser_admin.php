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

<section id="edituserAdmin" class="container mb-4">

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="display-5 my-5">Modifier un utilisateur</h2>
            <form action="src/edituser_admin.php" method="post" enctype="multipart/form-data" class="mt-4">
                <div class="form-group mb-4">
                    <label class="form-label mb-4 title-label">Avatar</label>
                    <div class="d-flex flex-wrap">
                        <div class="d-flex justify-content-center col-12 offset-md-1 col-lg-4">
                            <img src="assets/img/profil/<?= $user->profil ?>" alt="<?= $user->name ?>" class="edit-profil">
                        </div>
                        <div class="form-group col-12 col-lg-6 offset-lg-1">
                            <label for="profil" class="form-label">Avatar actuel :</label>
                            <input type="text" class="form-control mb-4" id="profil" value="<?= $user->profil ?>" disabled>
                            <label for="newProfil" class="form-label">Télécharger une nouvel avatar :</label>
                            <input type="file" class="form-control mb-4" id="newProfil" name="newProfil">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="name" class="form-label title-label">Nom de l'utilisateur</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user->name ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="first" class="form-label title-label">Prénom de l'utilisateur</label>
                    <input type="text" class="form-control" id="first" name="first" value="<?= $user->first_name ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="status" class="form-label title-label">Statut de l'utilisateur</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="">Sélectionnez...</option>
                        <?php foreach($editUsers as $users): ?>
                            <option value="<?= $users->s_id ?>" <?= $user->status_id == $users->s_id ? 'selected' : '' ?>><?= $users->s_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="email" class="form-label title-label">Adresse e-mail</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $user->email ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="password" class="form-label title-label">Mot de passe</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?= $user->password ?>">
                </div>
                <input type="hidden" value="<?=$user->id ?>" name="id">
                <input type="submit" class="btn form-btn mt-3" value="Modifier">
            </form>
        </div>
    </div>
</section>