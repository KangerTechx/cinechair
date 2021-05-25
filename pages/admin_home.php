<?php

$sql = "SELECT * FROM type";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$types = $stmt->fetchall();

$sql = "SELECT * FROM category
        ORDER BY c_name";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll();

adminSearch($dbh);
$blurays = $stmt->fetchAll();

?>

<section class="container">
        <h2 class="display-5 my-4">Gestion des Blurays <small><a href="?action=addbluray"><i class="bi bi-plus-square"></i></a></small></h2>
        <?php if($blurays) : ?>
            <p>Nombre d'articles: <?= count($blurays) ?></p>
            <div class="row ">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Cover</th>
                            <th>Nom</th>
                            <th>
                                <ul class="navbar-nav me-4 mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="?page=Film" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?= !isset($_GET['genre']) ? 'Genre' : $_GET['genre'] ?>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li <?= !isset($_GET['genre']) ? 'class="lost"' : '' ?>><a class="dropdown-item" <?= isset($_GET['cat']) ? 'href="?cat='. $_GET['cat'] .'"' : 'href="?action='. $_GET['action'] .'"' ?>>Tous les genres</a></li>

                                            <?php foreach ($types as $type): ?>
                                                <li <?= (isset($_GET['genre']) && $_GET['genre'] == $type->t_name) ? 'class="lost"' : '' ?>>
                                                    <a class="dropdown-item" <?= isset($_GET['cat']) ? 'href="?genre='. $type->t_name .'&cat='. $_GET['cat'].'"' : 'href="?genre='. $type->t_name .'"'?>><?= $type->t_name?></a>
                                                </li>
                                            <?php endforeach ?>

                                        </ul>
                                    </li>
                                </ul>
                            </th>
                            <th>
                                <ul class="navbar-nav me-4 mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="?page=Film" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?= !isset($_GET['cat']) ? 'Catégories' : $_GET['cat'] ?>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li <?= !isset($_GET['cat']) ? 'class="lost"' : '' ?>><a class="dropdown-item"  <?= isset($_GET['genre']) ? 'href="?genre='. $_GET['genre'] .'"' : 'href="?action='. $_GET['action'] .'"'?>>Toutes les catégories</a></li>

                                            <?php foreach ($categories as $category): ?>
                                                <li <?= (isset($_GET['cat']) && $_GET['cat'] == $category->c_name) ? 'class="lost"' : '' ?>><a class="dropdown-item" <?= isset($_GET['genre']) ? 'href="?cat='. $category->c_name .'&genre='. $_GET['genre'].'"' : 'href="?cat='. $category->c_name .'"'?>><?= $category->c_name?></a></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </li>
                                </ul>
                            </th>
                            <th>Date de sortie</th>
                            <th>Note</th>
                            <th>Prix</th>
                            <th><i class="bi bi-trash"></i></th>
                            <th><i class="bi bi-pencil green"></i></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach($blurays as $bluray) : ?>
                            <tr>
                                <td><img src="assets/img/cover/<?= $bluray->cover ?>" alt="<?= $bluray->name ?>"></td>
                                <td><?= $bluray->name ?></td>
                                <td><?= $bluray->t_name ?></td>
                                <td><?= $bluray->c_name ?></td>
                                <td><?= $bluray->release_date ?></td>
                                <td><?= stars($bluray->note) ?></td>
                                <td><?= $bluray->price ?></td>
                                <td><a href="src/delbluray.php?id=<?= $bluray->id ?>" onclick="return confirm('Êtes vous sûre de vouloir suprimer <?= $bluray->name ?> ? Cette action sera définitive')"><i class="bi bi-trash trash-grey"></i></a></td>
                                <td><a href="?action=editbluray&id=<?= $bluray->id ?>"><i class="bi bi-pencil pencil-grey"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php else : ?>
            <?php if(isset($_GET['search'])): ?>
                <p>Pas d'articles trouvé pour la recherche <?= $_GET['search'] ?></p>
            <?php else : ?>
                <div class="row ">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Cover</th>
                                <th>Nom</th>
                                <th class="m-0 p-0">
                                    <ul class="navbar-nav me-4 mb-2 mb-lg-0">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="?page=Film" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <?= !isset($_GET['genre']) ? 'Genre' : $_GET['genre'] ?>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li <?= !isset($_GET['genre']) ? 'class="lost"' : ''?>><a class="dropdown-item" <?= isset($_GET['cat']) ? 'href="?cat='. $_GET['cat'] .'"' : 'href="?action='. $_GET['action'] .'"' ?>>Tous les genres</a></li>
                                                <?php foreach ($types as $type): ?>
                                                    <li <?= (isset($_GET['genre']) && $_GET['genre'] == $type->t_name) ? 'class="lost"' : '' ?>>
                                                        <a class="dropdown-item" <?= isset($_GET['cat']) ? 'href="?genre='. $type->t_name .'&cat='. $_GET['cat'].'"' : 'href="?genre='. $type->t_name .'"'?>><?= $type->t_name?></a>
                                                    </li>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </th>
                                <th class="my-0 py-0">
                                    <ul class="navbar-nav me-4 mb-2 mb-lg-0">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="?page=Film" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <?= !isset($_GET['cat']) ? 'Catégories' : $_GET['cat'] ?>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li <?= !isset($_GET['cat']) ? 'class="lost"' : '' ?>><a class="dropdown-item"  <?= isset($_GET['genre']) ? 'href="?genre='. $_GET['genre'] .'"' : 'href="?action='. $_GET['action'] .'"'?>>Toutes les catégories</a></li>

                                                <?php foreach ($categories as $category): ?>
                                                    <li <?= (isset($_GET['cat']) && $_GET['cat'] == $category->c_name) ? 'class="lost"' : ''?>><a class="dropdown-item" <?= isset($_GET['genre']) ? 'href="?cat='. $category->c_name .'&genre='. $_GET['genre'].'"' : 'href="?cat='. $category->c_name .'"'?>><?= $category->c_name?></a></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </th>
                                <th>Date de sortie</th>
                                <th>Note</th>
                                <th>Prix</th>
                                <th><i class="bi bi-trash"></i></th>
                                <th><i class="bi bi-pencil green"></i></th>
                            </tr>
                            </thead>
                        </table>
                        <p>Pas d'articles trouvé pour la catégorie <?= $_GET['cat'] ?></p>
                    </div>
                </div>
            <?php endif ?>
        <?php endif ?>
    </section>