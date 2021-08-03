<?php
session_start();
requireValidSession();
$exception = null;

$id = $_POST['desativar'];

if (count($_POST) > 2) {
    try {
        $dbMembro = new Membro($_POST);
        $dbMembro->update();
        $_SESSION['user'] = $dbMembro;
        addSuccessMsg("Usuário alterado com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
} elseif (isset($id)) {
    Membro::desativar($id);
}

$userData = Membro::getOne(['id' => $_SESSION['user']->id]);
$cargos = Cargo::get();
$departamentos = Departamento::get();

loadTemplateView('profile', [
    'membro' => $userData,
    'cargos' => $cargos,
    'departamentos' => $departamentos,
    'exception' => $exception
]);