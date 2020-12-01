<div class="card mb-5">
    <h4 class="card-header"><?= $data['title'] ?></h4>
    <div class="card-body">
        <p class="card-text"><?= $data['content'] ?></p>
    </div>
    <div class="card-footer text-muted text-right">
        <?= date('d.m.Y H:i', $data['posted']) ?> &raquo;
        <a href="<?= str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) ?>post/<?= $data['slug'] ?>">Mehr lesen...</a>
    </div>
</div>