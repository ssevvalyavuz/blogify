<?php
// config.php dosyasını dahil ediyoruz
include('config.php');

// Formdan gelen verileri al
$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];

// SQL sorgusunu hazırla
$sql = "INSERT INTO posts (title, category, content) VALUES ('$title', '$category', '$content')";

// Sorguyu çalıştır ve sonucu kontrol et
if ($conn->query($sql) === TRUE) {
    // Başarılı bir şekilde eklendiğinde kullanıcıyı başka bir sayfaya yönlendir
    header("Location: success.php");
    exit;
} else {
    // Eğer bir hata olursa hata mesajını göster
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>


