<?php

$stmt = $dbConnection->prepare('SELECT `title`,`content`,`posted`,`slug` FROM `Entrys` WHERE `slug` = :slug');
$stmt->bindParam(':slug', $slug);
$stmt->execute();

$execute = true;
if ($stmt->rowCount() > 0)
{

    $data = $stmt->fetch();

    require_once PAGE_DIR.'/viewpost.php';

    $execute = false;

}

if($execute === true) {
    header("Location: ".$fileBase.'home/');
}