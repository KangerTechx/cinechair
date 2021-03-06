<?php

$sql = "SELECT * from type";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$links = $stmt->fetchAll();

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
    <!-- Links google font   -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <!--  Bootstrap links  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--  Glider css  -->
    <link rel="stylesheet" href="assets/css/glider.min.css">
    <!--  Main css links  -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="icon" href="assets/img/film.svg">
    <title>Cinechair</title>
</head>
<body>
<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home"><i class="bi bi-film"></i>Cinechair</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($links as $link): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=<?= $link->t_name ?>"><?= $link->t_name ?></a>
                        </li>
                    <?php endforeach ?>
                    <?php if($_GET['page'] == 'Film' || $_GET['page'] == 'S??rie' || $_GET['page'] == 'Dessin-Anim??'): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="?page=Film" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= !isset($_GET['cat']) ? 'Cat??gories' : $_GET['cat'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li <?= !isset($_GET['cat']) ? 'class="lost"' : '' ?>><a class="dropdown-item" href="?page=<?= $_GET['page'] ?>">Toutes les cat??gories</a></li>
                                <?php foreach ($categorys as $category): ?>
                                <li <?= (isset($_GET['cat']) && $_GET['cat'] == $category->c_name) ? 'class="lost"' : '' ?>><a class="dropdown-item" href="?page=<?= $_GET['page'] ?>&cat=<?= $category->c_name?>"><?= $category->c_name?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                    <?php endif ?>
                </ul>
                <?php if(!isset($_SESSION['email'])) : ?>
                <ul class="navbar-nav">
                    <li class="nav-item users-logo me-2">
                        <a href="?page=login" class="nav-link"><i class="bi bi-person-circle"></i></a>
                    </li>
                </ul>
                <?php else : ?>
                    <ul class="navbar-nav " >
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="?page=Film" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/profil/<?= $_SESSION['profil'] ?>" class="user-profil">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="user-icon"><i class="bi bi-person-circle mx-2"></i><span class="user-name"><?= $_SESSION['name'].' '. $_SESSION['first-name'] ?></span></li>
                                <hr>
                                <?php if($_SESSION['status'] == 'Admin' || $_SESSION['status'] == 'Big Boss') : ?>
                                    <li class="user-icon"><a class="dropdown-item" href="admin"><i class="bi bi-door-open me-2"></i>Administration</a></li>
                                <?php endif ?>
                                <li class="user-icon"><a class="dropdown-item" href="?page=user"><i class="bi bi-gear me-2"></i>Param??tres</a></li>
                                <li class="user-icon"><a class="dropdown-item" href="src/disconnect.php"><i class="bi bi-power me-2"></i>D??connexion</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php endif ?>
                <form class="d-flex" action="?" method="get">
                    <input class="form-control me-2" type="search" name="search" <?= isset($_GET['search']) ? 'value='.$_GET['search'] : '' ?>>
                    <button class="btn" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<main>