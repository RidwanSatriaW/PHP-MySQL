<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("insert into comments(email, comment) values ('budi@gmail.com','Hello')");
$connection->exec("insert into comments(email, comment) values ('budi@gmail.com','Hello')");
$connection->exec("insert into comments(email, comment) values ('budi@gmail.com','Hello')");
$connection->exec("insert into comments(email, comment) values ('budi@gmail.com','Hello')");

$connection->rollBack();

$connection = null;