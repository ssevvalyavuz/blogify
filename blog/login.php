<?php
// Veritabanı bağlantısı ve diğer gerekli dosyaları dahil edin
include 'db.php';

// Oturumu başlatın
session_start();

// Form gönderildiğinde
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kullanıcı adı ve şifreyi alın
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kullanıcıyı doğrulamak için veritabanını sorgulayın
    $query = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Sonuçları alın
    $stmt->bind_result($user_id, $username, $stored_password);
    
    // Eğer kullanıcı bulunduysa
    if ($stmt->fetch()) {
        // Veritabanında saklanan hashlenmiş şifreyi kullanarak doğrulama yapın
        if (password_verify($password, $stored_password)) {
            // Kullanıcı doğrulandı
            // Kullanıcı bilgilerini oturumda sakla
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;

            // Giriş başarılı olduğunda kullanıcıyı yönlendirin
            header("Location: index.php");
            exit;
        } else {
            // Şifre yanlış
            $error = "Kullanıcı adı veya şifre hatalı.";
        }
    } else {
        // Kullanıcı bulunamadı
        $error = "Kullanıcı adı veya şifre hatalı.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap - Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container mt-5">
    <h2>Giriş Yap</h2>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
    <?php endif; ?>
    <form method="POST" action="">
        <div class="form-group">
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Şifre:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Giriş Yap</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12
