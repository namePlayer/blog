<?php
session_start();

define('PAGE_DIR', __DIR__.'/pages');
define('ACTION_DIR', __DIR__.'/actions');
define('ASSET_DIR', __DIR__.'/assets');
define('TEMPLATE_DIR', __DIR__.'/template');

require_once __DIR__.'/includes/database.php';
require_once __DIR__.'/includes/utilities.php';

require_once __DIR__.'/includes/router.php';