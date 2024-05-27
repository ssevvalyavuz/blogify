<?php
$servername = "localhost"; // Veritabanı sunucusunun adı
$username = "dbusr21360859031"; // Veritabanı kullanıcı adı
$password = "e9aOYEkHrDX6"; // Veritabanı şifresi
$database = "dbstorage21360859031"; // Kullanılacak veritabanının adı

$conn = new mysqli($servername,$username,$password,$database);

if ($conn->connect_error) {
    die("Veritabanı bağlantısında hata: " . $conn->connect_error);
}
?>
