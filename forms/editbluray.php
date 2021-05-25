<?php
$sql = "SELECT * FROM bluray
        LEFT JOIN type ON type_id = t_id
        LEFT JOIN category ON cat_id = c_id
        WHERE id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$bluray = $stmt->fetch();


$sql = "SELECT * FROM type";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$types = $stmt->fetchAll();

$sql = "SELECT * FROM category
        ORDER BY c_name";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll();
?>

<section id="editbluray" class="container">

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="display-5 my-5">Modifier un Bluray</h2>
            <form action="src/editbluray.php" method="post" class="mt-4" enctype="multipart/form-data">
                <div class="form-group mb-4">
                    <label class="form-label mb-4 title-label">Cover du Bluray</label>
                    <div class="d-flex flex-wrap">
                        <div class="d-flex justify-content-center col-12 offset-md-1 col-lg-4">
                            <img src="assets/img/cover/<?= $bluray->cover ?>" alt="<?= $bluray->name ?>" class="edit-img">
                        </div>
                        <div class="form-group col-12 col-lg-6 offset-lg-1">
                            <label for="cover" class="form-label">Cover actuelle :</label>
                            <input type="text" class="form-control mb-4" id="cover" name="cover" value="<?= $bluray->cover ?>" disabled>
                            <label for="newCover" class="form-label">Télécharger une nouvelle cover :</label>
                            <input type="file" class="form-control mb-4" id="newCover" name="newCover">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="name" class="form-label title-label">Nom du Bluray</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bluray->name ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="price" class="form-label title-label">Prix du Bluray</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?= $bluray->price ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="type" class="form-label title-label">Genre du bluray</label>
                    <select name="type" id="type" class="form-control">
                        <option value="">Sélectionnez...</option>
                        <?php foreach($types as $type): ?>
                            <option value="<?= $type->t_id ?>"<?= $bluray->type_id == $type->t_id ? 'selected' : '' ?>><?= $type->t_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="category" class="form-label title-label">Catégorie du bluray</label>
                    <select name="category" id="category" class="form-control">
                        <option value="">Sélectionnez...</option>
                        <?php foreach($categories as $category): ?>
                            <option value="<?= $category->c_id ?>"<?= $bluray->cat_id == $category->c_id ? 'selected' : '' ?>><?= $category->c_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="date" class="form-label title-label">Date de sortie</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?= $bluray->release_date ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="note" class="form-label title-label">Evaluation du bluray</label>
                    <select name="note" id="note" class="form-control">
                        <option value="<?= $bluray->note ?>"></option>
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <option value="<?= $i ?>" <?= $bluray->note == $i ? 'selected' : '' ?>><?= $i ?></option>
                        <?php endfor ?>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="description" class="form-label title-label">Description du bluray</label>
                    <textarea name="description" id="description" class="form-control"><?= $bluray->description ?></textarea>
                </div>
                <input type="hidden" value="<?=$bluray->id ?>" name="id">
                <input type="submit" class="btn form-btn mb-4" value="Modifier">
            </form>
        </div>
    </div>
</section>
