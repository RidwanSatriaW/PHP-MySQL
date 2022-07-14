<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$username = "ridwan";
$password = "ridwan";

$sql = 'select * from admin where username = :user and password = :pass';

$Statement = $connection->prepare($sql);
$Statement->bindParam("user", $username);
$Statement->bindParam("pass", $password);
$Statement->execute();


//fetch untuk mengambil data yang sesuai satu persatu
//jika pakai fetch lagi maka akan diambil data kedua
//jika pakai fetch lagi maka akan diambil data ketiga dan seterusnya
//jadi tidak usah perulangan lagi
if ($row = $Statement->fetch()) {
    echo "Sukses login : " . $row['username'] . PHP_EOL;
}else{
    echo "gagal login";
}

//fetchAll untuk menarik semua data


$connection = null;