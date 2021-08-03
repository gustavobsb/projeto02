<?php

function requireValidSession($requiresAdmin = false)
{
    $user = $_SESSION['user'];
    if (!isset($user)) {
        header("Location: login.php");
        exit();
    }elseif ($requiresAdmin && !$user->admin) {
        addErrorMsg('Acesso negado!');
        header("Location: home.php");
        exit();
    }
}