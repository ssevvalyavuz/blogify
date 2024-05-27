<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "blog_db";

// Veritabanı bağlantısı oluştur
$conn = new mysqli("localhost", "username", "", "blog_db");

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Blog yazısı verileri
$user_id = 1;
$title = "Örnek Blog Yazısı";
$content = "Bu, veritabanına eklenen bir örnek blog yazısının içeriğidir.";
$created_at = date('Y-m-d H:i:s');

// SQL sorgusu hazırlama
$sql = "INSERT INTO posts (user_id, title, content, created_at) VALUES (?, ?, ?, ?)";

// SQL sorgusunu hazırlama ve parametreleri bağlama
$stmt = $conn->prepare($sql);
$stmt->bind_param("isss", $user_id, $title, $content, $created_at);

// Sorguyu çalıştırma
if ($stmt->execute()) {
    echo "Yeni kayıt başarıyla eklendi.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Bağlantıyı kapat
$stmt->close();
$conn->close();
?>
