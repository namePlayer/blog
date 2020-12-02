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
if(strpos($requestUrl, '/bl-login') !== FALSE) {
    $requirePage = 'login';
}
if(strpos($requestUrl, '/logout') !== FALSE) {
    session_destroy();
    header("Location: ".$fileBase.'bl-login/');
}

require_once ACTION_DIR.'/'.$requirePage.'.php';