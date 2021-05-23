<?php

$sql = "SELECT * FROM category
        WHERE c_id = :id";

$stmt = $dbh->prepare($sql);
$stmt->bindValue('id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$category = $stmt->fetch();

?>

<section id="editcategory" class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <h2 class="display-5 my-5">Modifier une Catégorie</h2>
            <form action="src/editcategory.php" method="post" class="mt-4">
                <div class="form-group">
                    <label for="category" class="form-label">Catégorie</label>
                    <input type="category" class="form-control" id="category" name="category" value="<?= $category->c_name ?>">
                </div>
                <!-- Champ caché avec l'id du site pour l'update -->
                <input type="hidden" value="<?=$category->c_id ?>" name="id">
                <input type="submit" class="btn form-btn mt-3" value="Modifier">
            </form>
        </div>
    </div>
</section>
