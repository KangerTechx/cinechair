<?php

// Les derniers ajouts

$sql = "SELECT * FROM bluray
        LEFT JOIN type ON type_id = t_id
        LEFT JOIN category ON cat_id = c_id
        ORDER BY id DESC
        LIMIT 5";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$news = $stmt->fetchAll();

// affichage des blurays

$sql = "SELECT * FROM bluray
        LEFT JOIN type ON type_id = t_id
        LEFT JOIN category ON cat_id = c_id
        ORDER BY name";

$search = "SELECT * FROM bluray
        LEFT JOIN type ON type_id = t_id
        LEFT JOIN category ON cat_id = c_id
        WHERE name LIKE :search
        ORDER BY name";

search($search, $sql, $dbh);
$blurays = $stmt->fetchAll();

$i = 1;
?>

<section class="mt-5">
    <?php if(!isset($_GET['search'])): ?>
        <div class="branding d-flex flex-wrap">
            <div class=" title col-10 col-lg-6 offset-1 align-self-center">
                <p class="display-6">Bienvenu sur</p>
                <h1 class="display-6">Cinechair</h1>
            </div>
            <div class="col-12 col-lg-5 ps-5">
                <h2 class="display-6 ps-4">Nos nouveauté</h2>
                <div class="glider-content">
                    <div class="glider">
                        <?php foreach($news as $new): ?>
                                <div class="card  m-4">
                                    <div class="size-img pt-2">
                                        <img src="assets/img/cover/<?= $new->cover ?>" class="card-image" alt="<?= $new->name ?>">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title"><?= $new->name ?></h6>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Prix: <?=$new->price ?> &euro;</li>
                                        <li class="list-group-item">Sortie: <?=$new->release_date ?></li>
                                        <li class="list-group-item"><?= stars($new->note) ?></li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="?page=detail&id=<?=$new->id ?>" class="card-link">Lire plus</a>
                                    </div>
                                </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
        <div class="ps-lg-5 pb-5">
        <?php if($blurays): ?>
            <?php foreach($links as $link): ?>
                <h2 class="display-4 my-5 ps-4 ps-lg-5"><?= $link->t_name ?></h2>
                <div class=" mt-4">
                    <div class="glider-content">
                        <div class="glider glider<?= $i++ ?>">
                            <?php foreach($blurays as $bluray): ?>
                                 <?php if($bluray->t_name == $link->t_name): ?>
                                    <div class="card m-4">
                                        <div class="size-img pt-2">
                                            <img src="assets/img/cover/<?= $bluray->cover ?>" class="card-image" alt="<?= $bluray->name ?>">
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title"><?= $bluray->name ?></h6>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Prix: <?=$bluray->price ?> &euro;</li>
                                            <li class="list-group-item">Sortie: <?=$bluray->release_date ?></li>
                                            <li class="list-group-item"><?= stars($bluray->note) ?></li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="?page=detail&id=<?=$bluray->id ?>" class="card-link">Lire plus</a>
                                        </div>
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php else : ?>
            <p class="display-6 m-4">Pas de résultats pour: <?= $_GET['search'] ?></p>
        <?php endif ?>
</div>
</section>