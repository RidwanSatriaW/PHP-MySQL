<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$connection->exec("insert into comments(email, comment)values ('lala@gmail.com','hai')");
$id = $connection->lastInsertId();

echo $id;

$connection = null;