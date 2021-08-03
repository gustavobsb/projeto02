<?php

session_start();
requireValidSession(true);
$exception = null;

if (isset($_POST['delete_id'])) {
    try {
        Cargo::deleteById($_POST['delete_id']);
        addSuccessMsg("Cargo excluído com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
} elseif (isset($_POST['update_id'])) {
    try {
        $_POST['id'] = $_POST['update_id'];
        $dbCargo = new Cargo($_POST);
        $dbCargo->update();
        addSuccessMsg("Cargo alterado com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
} elseif (count($_POST) > 0) {
    try {
        $dbCargo = new Cargo($_POST);
        $dbCargo->insert();
        addSuccessMsg("Cargo cadastrado com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
}

$membros = Membro::get();
$cargo = Cargo::get();

loadTemplateView('role', [
    'membros' => $membros,
    'cargos' => $cargo
]);