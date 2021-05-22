<?php
require_once 'function/db.php';
require_once 'function/function.php';
$dbh = connect();

if (!isset($_GET['page'])) {
    $_GET['page'] = 'home';
}

require_once 'partials/header.php';

if ($_GET['page'] == 'Film' || $_GET['page'] == 'Série' || $_GET['page'] == 'Dessin-Animé') {
    require_once 'pages/type.php';
} elseif ($_GET['page'] == 'detail') {
    require_once 'pages/detail.php';
} else {
    require_once 'pages/home.php';
}


require_once 'partials/footer.php';