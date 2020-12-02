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

<div class="container mt-5" style="max-width: 550px;">

    <?php

    foreach ($messages as $item) {

        $data = ['type' => $item['type'], 'message' => $item['message']];

        loadTemplate('alert', $data);

    }

    ?>

    <div class="card">
        <div class="card-header text-center">
            <b>Anmelden</b>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="mb-3">
                    <label for="loginInputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="loginInputEmail" name="loginInputEmail">
                </div>
                <div class="mb-3">
                    <label for="loginInputPassword" class="form-label">Passwort</label>
                    <input type="password" class="form-control" id="loginInputPassword" name="loginInputPassword">
                </div>
                <button type="submit" class="btn btn-primary float-right">Anmelden</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>