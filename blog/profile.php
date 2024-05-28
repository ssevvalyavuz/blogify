<?php
session_start();
include 'db.php';
include 'header.php';

// eğer giriş yapmadıysa giriş yapa yönlendir
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Kullanıcının güncel bilgilerini almak için veritabanını sorgu atıyoruz
$user_id = $_SESSION['user_id'];
$query = "SELECT fullName, username, email, phone FROM users WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->store_result();

$fullName = '';
$username = '';
$email = '';
$phone = '';

// Sonuçları alıyoruz.
$stmt->bind_result($fullName, $username, $email, $phone);
$stmt->fetch();
$stmt->close();

// Kullanıcı bilgilerini güncelliyoruz.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_fullName = $_POST['fullName'] ?? $fullName;
    $new_username = $_POST['username'] ?? $username;
    $new_email = $_POST['email'] ?? $email;
    $new_phone = $_POST['phone'] ?? $phone;

    // Şifre değişikliği kısmı
    if (!empty($_POST['password'])) {
        $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $update_query = "UPDATE users SET fullName = ?, username = ?, email = ?, phone = ?, password = ? WHERE id = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("sssssi", $new_fullName, $new_username, $new_email, $new_phone, $new_password, $user_id);
    } else {
        $update_query = "UPDATE users SET fullName = ?, username = ?, email = ?, phone = ? WHERE id = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("ssssi", $new_fullName, $new_username, $new_email, $new_phone, $user_id);
    }

    if ($stmt->execute()) {
        // Oturumu güncelle
        $_SESSION['username'] = $new_username;
        $success_message = "Bilgiler başarıyla güncellendi.";
    } else {
        $error_message = "Bilgiler güncellenirken bir hata oluştu.";
    }
    $stmt->close();
}

// Hesap silme
if (isset($_POST['delete_account'])) {
    $delete_query = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $user_id);
    if ($stmt->execute()) {
        // Oturumu kapatıyoruz
        session_destroy();
        header("Location: register.php");
        exit;
    } else {
        $error_message = "Hesap silinirken bir hata oluştu.";
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Yönetimi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Profil Yönetimi</h2>
    <?php if (isset($success_message)): ?>
        <div class="alert alert-success" role="alert">
            <?= $success_message ?>
        </div>
    <?php elseif (isset($error_message)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $error_message ?>
        </div>
    <?php endif; ?>
    <form method="POST" action="">
        <div class="form-group">
            <label for="fullName">Ad Soyad:</label>
            <input type="text" class="form-control" id="fullName" name="fullName" value="<?= $fullName ?>" required>
        </div>
        <div class="form-group">
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $username ?>" required>
        </div>
        <div class="form-group">
            <label for="email">E-posta Adresi:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefon Numarası:</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?= $phone ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Şifre (değiştirmek istemiyorsanız boş bırakın):</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
    <form method="POST" action="" class="mt-3">
        <button type="submit" class="btn btn-danger" name="delete_account" onclick="return confirm('Hesabınızı silmek istediğinize emin misiniz?');">Hesabı Sil</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
