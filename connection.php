<?php

try {
    require_once('inc/cred.php');

    $HOST = getenv("HOST");
    $PORT = getenv("PORT");
    $USER = getenv("USER");
    $PASS = getenv("PASSWORD");

    $db = new PDO(
        "mysql:host=$HOST;
        port=$PORT;
        dbname=crud_php", 
        $USER, $PASS
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
