<?php

session_start();
requireValidSession(true);
$exception = null;

if (isset($_POST['delete_id'])) {
    try {
        Despesa::deleteById($_POST['delete_id']);
        addSuccessMsg("Despesa excluída com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
} elseif (isset($_POST['update_id'])) {
    try {
        $_POST['id'] = $_POST['update_id'];
        $dbDespesa = new Despesa($_POST);
        $dbDespesa->update();
        addSuccessMsg("Despesa alterada com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
} elseif (count($_POST) > 0) {
    try {
        $dbDespesa = new Despesa($_POST);
        $dbDespesa->insert();
        addSuccessMsg("Despesa cadastrada com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
}

$despesas = Despesa::get();

foreach ($despesas as $despesa) {
    $despesa->entrada = (new DateTime($despesa->entrada))->format('d/m/Y');
}

loadTemplateView('expense', [
    "despesas" => $despesas
]);