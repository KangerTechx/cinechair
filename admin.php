<?php

require_once 'function/db.php';
require_once 'function/function.php';
$dbh = connect();


if (!isset($_GET['action'])) {
    $_GET['action'] = 'admin';
}

session_start();

if (!isset($_SESSION['email']) && !isset($_SESSION['status'])) {
    header('location: ../cinechair/?page=login');
} elseif (isset($_SESSION['email']) && !isset($_SESSION['status'])) {
    header('location: ../cinechair/');
}

require_once "partials/admin_header.php";


if($_GET['action'] == 'editbluray') {
    require_once 'forms/editbluray.php';
} elseif ($_GET['action'] == 'addbluray') {
    require 'forms/addbluray.php';
} elseif ($_GET['action'] == 'categorys') {
    require 'pages/admin_category.php';
}elseif ($_GET['action'] == 'editcategory') {
    require 'forms/editcategory.php';
} elseif ($_GET['action'] == 'addcategory') {
    require 'forms/addcategory.php';
} elseif ($_GET['action'] == 'users') {
    require 'pages/admin_users.php';
} elseif ($_GET['action'] == 'edituser') {
    require 'forms/edituser_admin.php';
} else {
    require_once "pages/admin_home.php";
}


require_once 'partials/admin_footer.php';