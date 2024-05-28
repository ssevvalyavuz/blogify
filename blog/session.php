<?php
session_start();

$session_duration = 3600;
ini_set('session.gc_maxlifetime', $session_duration);
session_set_cookie_params($session_duration);

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    echo "Hoş geldiniz, $username!";
} else {
    echo "Lütfen giriş yapın.";
}
?>
