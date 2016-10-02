<?php

$user = "root";
$pass = "mysql";

try {
    $db = new PDO("
        mysql:host=localhost;
        port=3306;
        dbname=crud_php", 
        $user, $pass
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
