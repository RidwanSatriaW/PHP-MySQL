<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("insert into comments(email, comment) values ('kasino@gmail.com','Hello')");
$connection->exec("insert into comments(email, comment) values ('kasino@gmail.com','Hello')");
$connection->exec("insert into comments(email, comment) values ('kasino@gmail.com','Hello')");
$connection->exec("insert into comments(email, comment) values ('kasino@gmail.com','Hello')");

$connection->commit();

$connection = null;