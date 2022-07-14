<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$sql = 'SELECT id,name,email FROM customers';
$statement = $connection->query($sql);

foreach ($statement as $row ) {
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "Id : $id " . PHP_EOL;
    echo "name : $name "  . PHP_EOL;
    echo "email : $email " . PHP_EOL;
}

$connection = null;