<?php

adminSearch($dbh);
$blurays = $stmt->fetchAll();

?>

<section class="container">
        <h2 class="display-5 my-4">Gestion des Blurays <small><a href="?action=addsite"><i class="bi bi-plus-square"></i></a></small></h2>
        <?php if($blurays) : ?>
            <p>Nombre d'articles: <?= count($blurays) ?></p>
            <div class="row ">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Cover</th>
                            <th>Nom</th>
                            <th>Genre</th>
                            <th>Catégorie</th>
                            <th>Date de sortie</th>
                            <th>Note</th>
                            <th>Prix</th>
                            <th><i class="bi bi-trash"></i></th>
                            <th><i class="bi bi-pencil"></i></th>
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
                                <td><a href="src/delbluray.php?id=<?= $bluray->id ?>" onclick="return confirm('Are you sure')"><i class="bi bi-trash"></i></a></td>
                                <td><a href="?action=editbluray&id=<?= $bluray->id ?>"><i class="bi bi-pencil"></i></a></td>
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
            <p>Pas d'articles trouvé pour la catégorie <?= $_GET['cat'] ?></p>
            <?php endif ?>
        <?php endif ?>
    </section>