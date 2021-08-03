<?php

session_start();
requireValidSession(true);
$exception = null;

if (isset($_POST['delete_id'])) {
    try {
        Departamento::deleteById($_POST['delete_id']);
        addSuccessMsg("Departamento excluído com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
}elseif (isset($_POST['update_id'])) {
    $_POST['id'] = $_POST['update_id'];
    $dbDepartamento = new Departamento($_POST);
    $dbDepartamento->update();
    addSuccessMsg("Departamento alterado com sucesso.");
} elseif (count($_POST) > 0) {
    try {
        $dbDepartamento = new Departamento($_POST);
        $dbDepartamento->insert();
        addSuccessMsg("Departamento cadastrado com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
}

$membros = Membro::get();
$departamentos = Departamento::getDepartamentos();

loadTemplateView('department', [
    'membros' => $membros,
    'departamentos' => $departamentos,
    'exception' => $exception
]);