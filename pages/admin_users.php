<?php

$sql = "SELECT * FROM users
        LEFT JOIN status ON status_id = s_id";
isset($_GET['order']) ? $sql .= " ORDER BY name DESC" : $sql .=" ORDER BY name ASC";

$stmt = $dbh->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();

?>

<section class="container">
    <h2 class="display-5 my-4">Gestion des Utilisateurs</h2>
    <p>Nombre d'utilisateurs: <?= count($users) ?></p>
    <div class="row">
        <div class="col-12">
            <table class="table table-hover col-6">
                <thead>
                <tr>
                    <th>Photo</th>
                    <th><a <?= !isset($_GET['order']) ? 'href="?action=users&order=desc"' : 'href="?action=users"' ?> class="link">Nom</a></th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th><i class="bi bi-trash"></i></th>
                    <th><i class="bi bi-pencil green"></i></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach($users as $user) : ?>
                    <tr>
                        <td><img src="assets/img/profil/<?= $user->profil ?>" alt="<?= $user->name ?>" class="edit-profil"></td>
                        <td><?= $user->name ?></td>
                        <td><?= $user->first_name ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= $user->s_name ?></td>
                        <td><a href="src/deluser.php?id=<?= $user->id ?>" onclick="return confirm('Êtes vous sûre de vouloir suprimer <?= $user->name ?> <?= $user->first_name ?> ? Cette action sera définitive')"><i class="bi bi-trash trash-grey"></i></a></td>
                        <td><a href="?action=edituser&id=<?= $user->id ?>"><i class="bi bi-pencil pencil-grey"></i></a></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
