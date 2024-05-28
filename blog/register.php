<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (fullName, username, email, phone, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        die("Hazırlama hatası: " . $conn->error);
    }
    $stmt->bind_param("sssss", $fullName, $username, $email, $phone, $password);

    if ($stmt->execute()) {
        echo "Kayıt başarıyla oluşturuldu.";
        header("Location: login.php"); 
        exit; 
    } else {
        echo "Hata: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Kayıt Ol</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="fullName">Ad Soyad:</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">E-posta Adresi:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefon Numarası:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="password">Şifre:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Kayıt Ol</button>
        </form>
    </div>
</body>
</html>
