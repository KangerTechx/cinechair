<?php


$sql = "SELECT * FROM users WHERE email = :email";
$stmt = $dbh->prepare($sql);
$stmt->bindValue('email', $_SESSION['email'], PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch();

?>


<section id="edituser" class="container mb-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="display-5 my-5">Modifier mon profil</h2>
            <form action="src/edituser.php" method="post" class="mt-4" enctype="multipart/form-data">
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
                            <input type="file" class="form-control mb-4" id="newProfil" name="newProfil" required>
                            <input type="hidden" value="<?= $user->id ?>" name="id">
                            <input type="submit" class="btn form-btn mt-3" value="Modifier">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="display-5 my-5">Modifier mon mot de passe</h2>
            <form action="src/editpassword.php" method="post" class="mt-4">
                <div class="form-group mb-4">
                    <label for="password" class="form-label">Mot de passe actuel:</label>
                    <input type="text" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group mb-4">
                    <label for="newPassword" class="form-label">Nouveau mot de passe:</label>
                    <input type="text" class="form-control" id="newPassword" name="newPassword" required>
                </div>
                <div class="form-group mb-4">
                    <label for="confPassword" class="form-label">Confirmez nouveau mot de passe:</label>
                    <input type="text" class="form-control" id="confPassword" name="confPassword" onfocus="validatePassword('newPassword', 'confPassword')" oninput="validatePassword('newPassword', 'confPassword')" required>
                </div>
                <input type="hidden" value="<?=$user->id ?>" name="id">
                <input type="submit" class="btn form-btn mt-3" value="Modifier">
            </form>
</section>