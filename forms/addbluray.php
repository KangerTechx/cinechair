<?php

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

<section id="addbluray" class="mb-4">

        <div class="container">
            <div class="col-md-8 offset-lg-2">
                <h2 class="display-5 my-5">Ajouter un Bluray</h2>
                <form action="src/addbluray.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-4">
                        <label for="cover" class="form-label title-label">Cover du bluray</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                    </div>
                    <div class="form-group mb-4">
                        <label for="name" class="form-label title-label">Nom du bluray</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="price" class="form-label title-label">Prix du bluray</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="type" class="form-label title-label">Genre du bluray</label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="">Sélectionnez...</option>
                            <?php foreach($types as $type): ?>
                                <option value="<?= $type->t_id ?>"><?= $type->t_name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="category" class="form-label title-label">Catégorie du bluray</label>
                        <select name="category" id="category" class="form-control" required>
                            <option value="">Sélectionnez...</option>
                            <?php foreach($categories as $category): ?>
                                <option value="<?= $category->c_id ?>"><?= $category->c_name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="date" class="form-label title-label">Date de sortie du bluray</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="note" class="form-label title-label">Evaluation du bluray</label>
                        <select name="note" id="note" class="form-control" required>
                            <option value="">Sélectionnez...</option>
                            <?php for($i = 1; $i <= 5; $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor ?>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="description" class="form-label title-label">Description du bluray</label>
                        <textarea name="description" id="description" class="form-control" required></textarea>
                    </div>
                    <input type="submit" class="btn form-btn mt-3" value="Ajouter">
                </form>
            </div>
        </div>
    </section>