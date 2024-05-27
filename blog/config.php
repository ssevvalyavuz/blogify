<?php

$servername = "localhost"; // Veritabanı sunucusunun adı
$username = "dbusr21360859031"; // Veritabanı kullanıcı adı
$password = "e9aOYEkHrDX6"; // Veritabanı şifresi
$database = "dbstorage21360859031"; // Kullanılacak veritabanının adı

// Veritabanı bağlantısı
$conn = new mysqli($servername,$username,$password,$database);

// Bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
}

// Türkçe karakter desteği
$conn->set_charset("utf8");
?>
