<?php

$servername = "localhost"; // Veritabanı sunucusunun adı
$username = "your_username"; // Veritabanı kullanıcı adı
$password = "your_password"; // Veritabanı şifresi
$database = "your_database"; // Kullanılacak veritabanının adı

// Veritabanı bağlantısı
$conn = new mysqli($servername,$username,$password,$database);

// Bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
}

// Türkçe karakter desteği
$conn->set_charset("utf8");
?>
