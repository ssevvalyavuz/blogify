<?php
// Oturumu başlat
session_start();

// Oturum süresini ayarla (isteğe bağlı)
// Örneğin, 1 saatlik bir oturum süresi
$session_duration = 3600; // 3600 saniye = 1 saat
ini_set('session.gc_maxlifetime', $session_duration);
session_set_cookie_params($session_duration);

// Kullanıcı oturumu başarıyla başlatıldıysa
if (isset($_SESSION['user_id'])) {
    // Kullanıcı giriş yapmış demektir, istediğiniz ek işlemleri yapabilirsiniz
    // Örneğin, kullanıcıya hoş geldiniz mesajı gösterebilirsiniz
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    echo "Hoş geldiniz, $username!";
} else {
    // Kullanıcı oturumu yoksa, isterseniz giriş yapmaları için bir bağlantı gösterebilirsiniz
    echo "Lütfen giriş yapın.";
}
?>
