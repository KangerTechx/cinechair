<?php
$sql = "SELECT * FROM category";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll()
?>

<section class="container">
    <h2 class="display-5 my-4">Gestion des catégories <small><a href="?action=addcategory"><i class="bi bi-plus-square"></i></a></small></h2>
    <p>Nombre de categories : <?= count($categories) ?></p>
    <div class="row ">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th><i class="bi bi-pencil d-flex justify-content-end green"></i></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach($categories as $category) : ?>
                    <tr>
                        <td><?= $category->c_name ?></td>
                        <td><a href="?action=editcategory&id=<?= $category->c_id ?>"><i class="bi bi-pencil d-flex justify-content-end align-items-center pencil-grey"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
