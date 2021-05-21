<?php

bindSearch($dbh);
$blurays = $stmt->fetchAll();

?>
<section class="mt-5">
    <h2 class="display-4 my-5 ps-4 ps-lg-5"><?= $_GET['page'] ?></h2>
    <?php if ($blurays): ?>
        <?php if(isset ($_GET['cat'])) : ?>
            <p>Nous répertorons <?= count($blurays) ?> <?= $_GET['page'] ?> pour la catégorie <?= $_GET['cat'] ?> </p>
        <?php endif ?>
        <div class="row col-12 d-flex align-items-center justify-content-center py-2">
            <?php foreach($blurays as $bluray): ?>
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
            <?php endforeach ?>
        </div>
    <?php else: ?>
        <p class="my-5 ps-4 ps-lg-5">Pas de <?= $_GET['page'] ?> pour la catégorie <?= $_GET['cat'] ?></p>
    <?php endif ?>

</section>