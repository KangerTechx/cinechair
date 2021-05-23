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

<section id="addbluray">

        <div class="row">
            <div class="col-md-8 offset-2">
                <h2 class="display-5 my-5">Insérer un site</h2>
                <form action="src/addbluray.php" method="post">
                    <div class="form-group">
                        <label for="cover" class="form-label">Cover du bluray</label>
                        <input type="text" class="form-control" id="cover" name="cover" required>
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Nom du bluray</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-label">Prix du bluray</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="type" class="form-label">Genre du bluray</label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="">Sélectionnez...</option>
                            <?php foreach($types as $type): ?>
                                <option value="<?= $type->t_id ?>"><?= $type->t_name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category" class="form-label">Catégorie du bluray</label>
                        <select name="category" id="category" class="form-control" required>
                            <option value="">Sélectionnez...</option>
                            <?php foreach($categories as $category): ?>
                                <option value="<?= $category->c_id ?>"><?= $category->c_name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date" class="form-label">Date de sortie du bluray</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="note" class="form-label">Evaluation du bluray</label>
                        <select name="note" id="note" class="form-control" required>
                            <option value="">Sélectionnez...</option>
                            <?php for($i = 1; $i <= 5; $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description du bluray</label>
                        <textarea name="description" id="description" class="form-control" required></textarea>
                    </div>
                    <input type="submit" class="btn form-btn mt-3" value="Ajouter">
                </form>
            </div>
        </div>
    </section>