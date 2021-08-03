<?php

session_start();
requireValidSession();
$exception = null;

if (isset($_POST['delete_id'])) {
    try {
        Membro::deleteById($_POST['delete_id']);
        addSuccessMsg("Membro excluído com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
} elseif (count($_POST) > 2) {
    try {
        if ($_POST['admin'] === 'on') {
            $_POST['admin'] = 1;
        } else {
            $_POST['admin'] = 0;
        }
        $dbMembro = new Membro($_POST);
        $dbMembro->insert();
        addSuccessMsg("Membro cadastrado com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
}
$membros = Membro::get();

loadTemplateView('members', [
    'membros' => $membros,
    'exception' => $exception
]);