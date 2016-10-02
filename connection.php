<?php
$user = "root";
$pass = "mysql";
try {
    $db = new PDO("
        mysql:hrost=localhost;
        port=3000;
        dbname=crud_php", 
        $user, $pass
    );
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
