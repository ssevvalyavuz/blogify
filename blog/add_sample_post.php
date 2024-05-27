<?php
include('db.php');

// Örnek veri
$title = "Örnek Blog Yazısı";
$content = "Bu bir örnek blog yazısıdır. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

// SQL sorgusunu hazırla
$sql = "INSERT INTO posts (title, content) VALUES (?, ?)";

// SQL sorgusunu hazırla ve parametreleri bağla
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $title, $content);

// SQL sorgusunu çalıştır ve sonucu kontrol et
if ($stmt->execute() === TRUE) {
    echo "Yeni yazı başarıyla eklendi.";
} else {
    echo "Hata: " . $stmt->error;
}

// Bağlantıyı kapat
$stmt->close();
$conn->close();
?>
