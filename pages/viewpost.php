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
<div class="container mt-5">

    <a href="<?= $fileBase ?>home/" >&laquo; Startseite</a>
    <hr>
    <h3><?= $data['title'] ?></h3>
    <small class="text-muted">Gepostet am <?= date('d.m.Y H:i', $data['posted']) ?></small>
    <hr>
    <?= $data['content'] ?>

</div>

</body>
</html>