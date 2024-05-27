<?php
include('db.php');

// Örnek Blog Postu atıyorum.

$title = "Örnek Blog Yazısı";
$content = "Bu bir örnek blog yazısıdır. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

$sql = "INSERT INTO posts (title, content) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $title, $content);

if ($stmt->execute() === TRUE) {
    echo "Yeni yazı başarıyla eklendi.";
} else {
    echo "Hata: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
