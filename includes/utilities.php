<?php

function loadTemplate($template, array $data = [])
{

    ob_start();

    extract($data);

    require(TEMPLATE_DIR . '/' . $template . '.php');

    echo ob_get_clean();

}