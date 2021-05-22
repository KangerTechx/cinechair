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
        <div class="col-md-8 offset-2">
            <h2 class="display-5 my-5">Modifier un Bluray</h2>
            <form action="src/editbluray.php" method="post" class="mt-4">
                <div class="form-group">
                    <label for="cover" class="form-label">Cover du Bluray</label>
                    <input type="text" class="form-control" id="cover" name="cover" value="<?= $bluray->cover ?>">
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Nom du Bluray</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bluray->name ?>">
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Prix du Bluray</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?= $bluray->price ?>">
                </div>
                <div class="form-group">
                    <label for="type" class="form-label">Catégorie du site</label>
                    <select name="type" id="type" class="form-control">
                        <option value="">Sélectionnez...</option> // ?? mmmmmh a travailler pas afficher quand deja selectionné
                        <?php foreach($types as $type): ?>
                            <option value="<?= $type->t_id ?>"<?= $bluray->type_id == $type->t_id ? 'selected' : '' ?>><?= $type->t_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="category" class="form-label">Catégorie du site</label>
                    <select name="category" id="category" class="form-control">
                        <option value="">Sélectionnez...</option>
                        <?php foreach($categories as $category): ?> // ?? mmmmmh a travailler pas afficher quand deja selectionné
                            <option value="<?= $category->c_id ?>"<?= $bluray->cat_id == $category->c_id ? 'selected' : '' ?>><?= $category->c_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date" class="form-label">Nom du Bluray</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?= $bluray->release_date ?>">
                </div>
                <div class="form-group">
                    <label for="note" class="form-label">Evaluation du bluray</label>
                    <select name="note" id="note" class="form-control">
                        <option value="<?= $bluray->note ?>"></option> // ?? mmmmmh a travailler pas afficher quand deja selectionné
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <option value="<?= $i ?>" <?= $bluray->note == $i ? 'selected' : '' ?>><?= $i ?></option>
                        <?php endfor ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Description du bluray</label>
                    <textarea name="description" id="description" class="form-control"><?= $bluray->description ?></textarea>
                </div>
                <!-- Champ caché avec l'id du site pour l'update -->
                <input type="hidden" value="<?=$bluray->id ?>" name="id">
                <input type="submit" class="btn form-btn mt-3" value="Modifier">
            </form>
        </div>
    </div>
</section>
