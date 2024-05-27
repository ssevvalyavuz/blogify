<?php

include 'db.php';
session_start();

?>

<?php include 'header.php'; ?>

<div class="container">
    <h1>Hoş Geldiniz!</h1>
    <p>Blogumuza hoş geldiniz. Burada en son blog yazılarını bulabilirsiniz.</p>

    <!-- Blog yazılarını listelediğimiz bölüm -->
    <div class="row">
        <?php
        // Veritabanından en son 5 blogu çekip listeliyoruz.
        $query = "SELECT * FROM blog_posts ORDER BY created_at DESC LIMIT 5";
        $result = mysqli_query($conn, $query);

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

<?php include 'footer.php'; ?>
