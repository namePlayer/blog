<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= $fileBase ?>home/">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $fileBase ?>home/">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php

                if(isset($_SESSION['bl_admin_login'])) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $fileBase ?>bl-admin/">Verwaltung</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= $fileBase ?>logout/">Abmelden</a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $fileBase ?>bl-login/">Login</a>
                    </li>
                    <?php
                }

                ?>
            </ul>
        </div>
    </div>
</nav>