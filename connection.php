<?php

try {
    $URL = getenv('JAWSDB_URL');
    $dbparts = parse_url($URL);

    $HOST = $dbparts['host'];
    $USER = $dbparts['user'];
    $PASS = $dbparts['pass'];
    $DATABASE = ltrim($dbparts['path'], '/');

    $db = new PDO(
        "mysql:host=$HOST;
        dbname=$DATABASE",
        $USER, $PASS
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
