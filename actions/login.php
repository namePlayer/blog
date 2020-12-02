<?php
$messages = [];

if(isset($_SESSION['bl_admin_login'])) {
    header("Location: ".$fileBase.'home/');
}

if(isset($_POST['loginInputEmail'], $_POST['loginInputPassword'])) {
    $email = $_POST['loginInputEmail'];
    $password = $_POST['loginInputPassword'];

    $stmt = $dbConnection->prepare('SELECT `account_id`,`email`,`password` FROM `Accounts` WHERE `email` = :email');
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $executeLogin = true;
    $stmtData = $stmt->fetch();

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $messages[] = ['type' => 'danger', 'message' => 'Bitte gebe eine gültige Email-Adresse an!'];
        $executeLogin = false;
    }

    if(empty($password)) {
        $messages[] = ['type' => 'danger', 'message' => 'Bitte gebe ein Passwort ein!'];
        $executeLogin = false;
    }

    if(!$stmt->rowCount() > 0) {
        $messages[] = ['type' => 'danger', 'message' => 'Dieser Account wurde nicht in der Datenbank gefunden!'];
        $executeLogin = false;
    }

    if($executeLogin === true && !password_verify($password, $stmtData['password'])) {
        $messages[] = ['type' => 'danger', 'message' => 'Dieser Account wurde nicht in der Datenbank gefunden!'];
        $executeLogin = false;
    }

    if($executeLogin == true) {
        $_SESSION['bl_admin_login'] = $stmtData['account_id'];
        header("Location: ".$fileBase.'home/');
    }

}

require_once PAGE_DIR.'/login.php';