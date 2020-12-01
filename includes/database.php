<?php

try {
    $dbConnection = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
} catch(PDOException $exception) {
    die('The Database Connection failed: '. $exception->getMessage());
}