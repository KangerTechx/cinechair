


<section class="container mt-5">
<?php
if($_GET['err'] == '01') {
    echo '<p class="display-6">Modification non effectuée pour cause de mauvais mot de passe</p><br><a href="?page=user" class="link">Retour à la page paramètre</a>';

} elseif ($_GET['err'] == '02') {
    echo '<p class="display-6">Modification non effectuée, la confirmation du nouveau mot de passe a échoué.</p><br><a href="?page=user" class="link">Retour à la page paramètre</a>';
} elseif ($_GET['err'] == '03') {
    echo '<p class="display-6">Cette Adresse mail est déjà utilisée</p><br><a href="?page=register" class="link">Retour à la page de création de compte</a>';
} elseif ($_GET['err'] == '04') {
    echo '<p class="display-6">Cette Adresse mail est déjà utilisée</p><br><a href="admin?action=users" class="link">Retour à la gestion des utilisateurs</a>';
}
?>
</section>
