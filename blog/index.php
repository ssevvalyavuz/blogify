<?php
include 'db.php';

session_start();

$posts_per_page = 5;

if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $current_page = (int)$_GET['page'];
} else {
    $current_page = 1;
}

$query = "SELECT COUNT(*) FROM blog_posts";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_row($result);
$total_posts = $row[0];

$total_pages = ceil($total_posts / $posts_per_page);

$offset = ($current_page - 1) * $posts_per_page;

$query = "SELECT * FROM blog_posts ORDER BY created_at DESC LIMIT $offset, $posts_per_page";
$result = mysqli_query($conn, $query);

?>

<?php include 'header.php'; ?>

<div class="container">
    <h1>Hoş Geldiniz!</h1>
    <p>Blogumuza hoş geldiniz. Burada en son blog yazılarını bulabilirsiniz.</p>

    <div class="row">
        <?php
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

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php
            if ($current_page > 1) {
                echo '<li class="page-item"><a class="page-link" href="index.php?page=' . ($current_page - 1) . '">Önceki</a></li>';
            }

            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $current_page) {
                    echo '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
                } else {
                    echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
                }
            }

            if ($current_page < $total_pages) {
                echo '<li class="page-item"><a class="page-link" href="index.php?page=' . ($current_page + 1) . '">Sonraki</a></li>';
            }
            ?>
        </ul>
    </nav>
</div>

<?php
include 'footer.php';
?>
