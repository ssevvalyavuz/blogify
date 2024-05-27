<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Yeni Blog Yazısı</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <?php include 'header.php'; ?>

        <div class="container">
            <h1>Yeni Blog Yazısı</h1>
            <form action="create_post.php" method="post">
                <div class="form-group">
                    <label for="title">Başlık</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="content">İçerik</label>
                    <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
            <a href="index.php" class="btn btn-secondary">Geri</a>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $title = $_POST['title'];
                $content = $_POST['content'];
                $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

                if ($conn->query($sql) === TRUE) {
                    echo "<div class='alert alert-success' role='alert'>Yeni yazı başarıyla eklendi.</div>";
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Hata: " . $sql . "<br>" . $conn->error . "</div>";
                }
            }
            $conn->close();
            ?>
        </div>
    </body>
</html>
