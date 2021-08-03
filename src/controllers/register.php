<?php

session_start();
$exception = null;

if (count($_POST) > 0) {
    try {
        $dbMembro = new Membro($_POST);
        $dbMembro->insert();
        $login = new Login($_POST);
        $membro = $login->checkLogin();
        $_SESSION['user'] = $membro;
        header("Location: home.php");
        exit();
    } catch (Exception $e) {
        $exception = $e;
    }
}

loadView('register', $_POST + ['exception' => $exception]);