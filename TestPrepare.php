<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = 'select * from admin where username = :user and password = :pass';

$Statement = $connection->prepare($sql);
$Statement->bindParam("user", $username);
$Statement->bindParam("pass", $password);
$Statement->execute();

$success = false;
$find_user = null;
foreach ($Statement as $row) {
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses login : " . $find_user . PHP_EOL;
}else{
    echo "gagal login";
}


$connection = null;