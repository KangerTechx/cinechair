<?php

$sql = "SELECT * FROM bluray
        LEFT JOIN type ON type_id = t_id
        LEFT JOIN category ON cat_id = c_id
        WHERE id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$details = $stmt->fetchAll();

?>

<section class="d-flex align-items-center h-100">
    <?php foreach($details as $detail) : ?>

        <div class="container-fluid d-flex mt-3 flex-wrap">
            <div class="col-10 col-lg-4 offset-1 p-5">
                <img src="assets/img/cover/<?= $detail->cover ?>" class="card-image" alt="<?= $detail->name ?>">
            </div>
            <div class="col-lg-4 offset-1 pt-5">
                <h2 class="py-3 display-5"><?= $detail->name ?></h2>
                <p>Prix : <?= $detail->price ?> &euro;</p>
                <p>Genre : <?= $detail->t_name ?></p>
                <p>Catégorie : <?= $detail->c_name ?></p>
                <p>Date de sortie : <?=date("d M Y", strtotime("$detail->release_date")) ?></p>
                <p> Note : <?= stars($detail->note) ?></p>
                <p><?= $detail->description ?></p>

            </div>
        </div>
    <?php endforeach ?>
</section>
