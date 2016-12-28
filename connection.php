<?php

try {
    require_once('inc/cred.php');

    $URL = getenv('JAWSDB_URL');
    $dbparts = parse_url($URL);

    $HOST = $dbparts['host'];
    $PORT = $dbparts['port'];
    $USER = $dbparts['user'];
    $PASS = $dbparts['pass'];
    $DATABASE = ltrim($dbparts['path'], '/');

    $db = new PDO(
        "mysql:host=$HOST;
        port=$PORT;
        dbname=$DATABASE",
        $USER, $PASS
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
