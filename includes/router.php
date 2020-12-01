<?php
$requestUrl = '/'.$_SERVER['QUERY_STRING'];
$fileBase = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
$requirePage = '404';

if($requestUrl === '/') {
    $requirePage = 'home';
}

if(strpos($requestUrl, '/home') !== FALSE) {
    $requirePage = 'home';
}

if(strpos($requestUrl, '/post') !== FALSE) {
    $urlParts = explode('/', $requestUrl);
    $slug = NULL;
    if(count($urlParts) >= 3) {
        $slug = $urlParts[2];
    }

    $requirePage = 'show_post';

    if(!isset($slug)) {
        $requirePage = '404';
    }
}

require_once ACTION_DIR.'/'.$requirePage.'.php';