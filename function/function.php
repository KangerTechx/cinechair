<?php


// fonction de notation

function stars(int $eval): void {
    for($i = 1; $i <= $eval; $i++) {
        echo '<i class="bi bi-star-fill yellow"></i>';
    }
    // echo $i;
    for(; $i <= 5; $i++) {
        echo '<i class="bi bi-star grey"></i>';
    }
}


// fonction nettoyage espace mot de passe

function cleaner($password) {
    return preg_replace('" "', '',$password);
}

// fonction search simple

function search($var1, $var2, $dbh) {
    global $stmt;
    if(isset($_GET['search'])) {
        $stmt = $dbh->prepare($var1);
        $stmt->bindValue('search', '%'.$_GET['search'].'%', PDO::PARAM_STR);
        $stmt->execute();
    } else {
        $stmt = $dbh->prepare($var2);
        $stmt->execute();
    }
    return $stmt;
}

// fonction search avec bind

function bindSearch($dbh) {
    global $stmt;
    if(isset($_GET['search'])) {
        $search = "SELECT * FROM bluray
                   LEFT JOIN type ON type_id = t_id
                   LEFT JOIN category ON cat_id = c_id
                   WHERE name LIKE :search
                   ORDER BY name";

        $stmt = $dbh->prepare($search);
        $stmt->bindValue('search', '%'.$_GET['search'].'%', PDO::PARAM_STR);
        $stmt->execute();
    } else {
        if(isset($_GET['cat'])) {
            $sql = "SELECT * FROM bluray
                    LEFT JOIN type ON type_id = t_id
                    LEFT JOIN category ON cat_id = c_id
                    WHERE t_name = :page AND c_name = :cat 
                    ORDER BY name";

            $stmt = $dbh->prepare($sql);
            $stmt->bindValue('page', $_GET['page'], PDO::PARAM_STR);
            $stmt->bindValue('cat', $_GET['cat'], PDO::PARAM_STR);
            $stmt->execute();
        } else {
            $sql = "SELECT * FROM bluray
                    LEFT JOIN type ON type_id = t_id
                    LEFT JOIN category ON cat_id = c_id
                    WHERE t_name = :page 
                    ORDER BY name";
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue('page', $_GET['page'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    return $stmt;
}


// fonction affichage admin

function adminSearch($dbh) {
    global $stmt;
    if(isset($_GET['search'])) {
        $search = "SELECT * FROM bluray
                   LEFT JOIN type ON type_id = t_id
                   LEFT JOIN category ON cat_id = c_id
                   WHERE name LIKE :search
                   ORDER BY name";

        $stmt = $dbh->prepare($search);
        $stmt->bindValue('search', '%'.$_GET['search'].'%', PDO::PARAM_STR);
        $stmt->execute();
    } else {
        if(isset($_GET['genre']) && isset($_GET['cat'])) {
            $sql = "SELECT * FROM bluray
                    LEFT JOIN type ON type_id = t_id
                    LEFT JOIN category ON cat_id = c_id
                    WHERE t_name = :genre AND c_name = :cat 
                    ORDER BY name";

            $stmt = $dbh->prepare($sql);
            $stmt->bindValue('genre', $_GET['genre'], PDO::PARAM_STR);
            $stmt->bindValue('cat', $_GET['cat'], PDO::PARAM_STR);
            $stmt->execute();
        } elseif(isset($_GET['genre'])) {
            $sql = "SELECT * FROM bluray
                    LEFT JOIN type ON type_id = t_id
                    LEFT JOIN category ON cat_id = c_id 
                    WHERE t_name = :genre
                    ORDER BY name";
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue('genre', $_GET['genre'], PDO::PARAM_STR);
            $stmt->execute();
        } elseif (isset($_GET['cat'])) {
            $sql = "SELECT * FROM bluray
                    LEFT JOIN type ON type_id = t_id
                    LEFT JOIN category ON cat_id = c_id 
                    WHERE c_name = :cat
                    ORDER BY name";
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue('cat', $_GET['cat'], PDO::PARAM_STR);
            $stmt->execute();
        } else {
            $sql = "SELECT * FROM bluray
                    LEFT JOIN type ON type_id = t_id
                    LEFT JOIN category ON cat_id = c_id 
                    ORDER BY name";
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
        }
    }
    return $stmt;
}


// g??n??ration new password

function randomPassword() {
    $pass = '';
    $alphabet = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789';
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, strlen($alphabet)-1);
        $pass .= $alphabet[$n];
    }
    return $pass;
}
