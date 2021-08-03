<?php

$exception = null;
$email = $_GET['email'];
$token = $_GET['token'];
$password = $_POST['password'];
$recuperacao = [];

if (count($_POST) > 0) {
    try {
        $recuperacao = Recuperacao::get(["email" => $email, "token" => $token]);
        if ($recuperacao) {
            $senha = password_hash($password, PASSWORD_DEFAULT);
            Membro::updatePassword($senha, $email);
            Recuperacao::deleteByEmailAndToken($email, $token);
            addSuccessMsg("Senha alterada com sucesso.");
            header( "Refresh:3; url=http://localhost/login.php", true, 303);
        } else {
            addErrorMsg("Link inválido ou expirado.");
        }
    } catch (Exception $e) {
        $exception = $e;
    }
}

loadView('reset', $_POST + ['exception' => $exception]);