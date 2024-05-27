<?php

$servername = "localhost"; // Veritabanı sunucusunun adı
$username = "your_username"; // Veritabanı kullanıcı adı
$password = "your_password"; // Veritabanı şifresi
$database = "your_database"; // Kullanılacak veritabanının adı

$conn = new mysqli($servername,$username,$password,$database);

if ($conn->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
