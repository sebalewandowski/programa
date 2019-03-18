<?php

try {
    $db = parse_ini_file("config.ini");
    $host = $db['DB_HOST'];
    $username = $db['DB_USERNAME'];
    $password = $db['DB_PASSWORD'];
    $port = $db['DB_PORT'];
    $dbName = $db['DB_DATABASE'];

    $connection = new PDO("mysql:host=$host;port=$port;dbname=$dbName", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = file_get_contents("init.sql");

    $connection->exec($sql);

    echo "Menu table created successfully.";
} catch(PDOException $error) {
    echo $error->getMessage();
}