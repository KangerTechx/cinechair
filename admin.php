<?php

require_once 'function/db.php';
require_once 'function/function.php';
$dbh = connect();


if (!isset($_GET['action'])) {
    $_GET['action'] = 'admin';
}

require_once "partials/admin_header.php";

if($_GET['action'] == 'editbluray') {
    require_once 'forms/editbluray.php';
} elseif (($_GET['action'] == 'addsite')) {
    require 'forms/addsite.php';
} else {
    require_once "pages/admin_home.php";
}


require_once 'partials/footer.php';