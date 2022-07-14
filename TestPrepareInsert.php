<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$username = "ridwan";
$password = "ridwan";

$sql = 'insert into admin(username, password) values(:user, :pass)';

$Statement = $connection->prepare($sql);
$Statement->bindParam("user", $username);
$Statement->bindParam("pass", $password);
$Statement->execute();

$connection = null;