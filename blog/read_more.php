<?php
include 'header.php';
include 'db.php'; // Veritabanı bağlantısını dahil edin

// URL'den gelen blog yazısı ID'sini alın
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $post_id = $_GET['id'];

    // Veritabanından ilgili blog yazısını alın
    $query = "SELECT * FROM blog_posts WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $post_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <div class="container mt-5">
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['content']; ?></p>
            <p class="text-muted">Yazar: <?php echo $row['author']; ?> | Yayın Tarihi: <?php echo date('d M Y', strtotime($row['created_at'])); ?></p>
        </div>
        <?php
    } else {
        echo "<div class='container mt-5'><p>Blog yazısı bulunamadı.</p></div>";
    }
} else {
    echo "<div class='container mt-5'><p>Blog yazısı ID'si belirtilmedi.</p></div>";
}

include 'footer.php';
?>
