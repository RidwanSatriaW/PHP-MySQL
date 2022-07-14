<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$sql = <<<SQL
    insert into customers(id, name, email)
    values ('Wicaksana', 'Wicaksana','Wicaksana@gmail.com')
SQL;

$connection->exec($sql);

$connection = null;