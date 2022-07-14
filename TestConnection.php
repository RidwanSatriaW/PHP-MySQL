<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";


try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    echo "sukses terkoneksi" . PHP_EOL;

    //menutup koneksi
    $connection = null;
}catch(PDOException $exception){
    echo " gagal koneksi" . $exception->getMessage() . PHP_EOL;
}