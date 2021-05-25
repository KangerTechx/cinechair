<?php
require_once 'function/db.php';
require_once 'function/function.php';
$dbh = connect();

if (!isset($_GET['page'])) {
    $_GET['page'] = 'home';
}

session_start();

require_once 'partials/header.php';

if ($_GET['page'] == 'Film' || $_GET['page'] == 'Série' || $_GET['page'] == 'Dessin-Animé') {
    require_once 'pages/type.php';
} elseif ($_GET['page'] == 'detail') {
    require_once 'pages/detail.php';
} elseif ($_GET['page'] == 'login') {
    require_once 'pages/login.php';
} elseif ($_GET['page'] == 'register') {
    require_once 'forms/adduser.php';
} elseif ($_GET['page'] == 'user') {
    require_once 'forms/edituser.php';
} elseif ($_GET['page'] == 'error') {
    require_once 'pages/error.php';
} else {
    require_once 'pages/home.php';
}


require_once 'partials/footer.php';