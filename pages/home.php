<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="<?= $fileBase ?>/assets/bootstrap.min.css">
</head>
<body>

    <?php require_once ASSET_DIR.'/navigation.php'; ?>

    <div class="container mt-5">

        <?php
            $stmt = $dbConnection->prepare('SELECT `title`,`content`,`posted`,`slug` FROM `Entrys` ORDER BY `posted` DESC LIMIT 7');
            $stmt->execute();

            while ($row = $stmt->fetch()) {
                $data = ['title' => $row['title'], 'content' => substr($row['content'], 0, 500).'...', 'posted' => $row['posted'], 'slug' => $row['slug']];
                loadTemplate('blog-card', $data);
            }
        ?>

    </div>

</body>
</html>