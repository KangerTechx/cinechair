<?php

$sql = "SELECT * FROM category ORDER BY c_name";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$categorys = $stmt->fetchAll();
?>

<!doctype html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  Bootstrap links  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--  Main css links  -->
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="icon" href="assets/img/film.svg">
    <title>Cinechair-Admin</title>
</head>
<body>
<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand"><i class="bi bi-film"></i>Cinechair - Admin</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="?action=admin">Blurays</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=categorys">Catégories</a>
                    </li>
                    <?php if($_SESSION['status'] == 'Big Boss') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=users">Utilisateurs</a>
                    </li>
                    <?php endif ?>
                </ul>
                <ul class="navbar-nav " >
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="?page=Film" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/profil/<?= $_SESSION['profil'] ?>" class="user-profil">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="user-icon"><i class="bi bi-person-circle mx-2"></i><span class="user-name"><?= $_SESSION['name'].' '. $_SESSION['first-name'] ?></span></li>
                            <hr>
                            <li class="user-icon"><a class="dropdown-item" href="/cinechair/"><i class="bi bi-door-open me-2"></i>Retour au site</a></li>
                            <li class="user-icon"><a class="dropdown-item" href="/cinechair/?page=user"><i class="bi bi-gear me-2"></i>Paramètres</a></li>
                            <li class="user-icon"><a class="dropdown-item" href="src/disconnect.php"><i class="bi bi-power me-2"></i>Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" action="?" method="get">
                    <input class="form-control me-2" type="search" <?php if(isset($_GET['search'])){ echo 'value='.$_GET['search'];} ?> name="search">
                    <button class="btn" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<main>