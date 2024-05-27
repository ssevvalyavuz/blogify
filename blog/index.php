<?php
// Veritabanı bağlantısı ve diğer gerekli dosyaları dahil edin
include 'db.php';

// Oturumu başlatın
session_start();

// Ana içerik alanı
?>

<?php include 'header.php'; ?>

<div class="container">
    <h1>Hoş Geldiniz!</h1>
    <p>Blogumuza hoş geldiniz. Burada en son blog yazılarını bulabilirsiniz.</p>

    <!-- Blog yazılarını listeleme -->
    <div class="row">
        <?php
        // Veritabanından en son 5 blog yazısını alın
        $query = "SELECT * FROM blog_posts ORDER BY created_at DESC LIMIT 5";
        $result = mysqli_query($conn, $query);

        // Sonuçları döngüyle gösterme
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-md-6">';
            echo '<div class="card mb-4">';
            echo '<div class="card-body">';
            echo '<h2 class="card-title">' . $row['title'] . '</h2>';
            echo '<p class="card-text">' . substr($row['content'], 0, 100) . '...</p>';
            echo '<a href="read_more.php?id=' . $row['id'] . '" class="btn btn-primary">Devamını Oku</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php
// Footer dosyasını dahil etme
include 'footer.php';
?>
