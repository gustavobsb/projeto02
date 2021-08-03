<?php

session_start();
requireValidSession(true);
$exception = null;

if (isset($_POST['delete_id'])) {
    try {
        Receita::deleteById($_POST['delete_id']);
        addSuccessMsg("Receita excluída com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
} elseif (isset($_POST['update_id'])) {
    try {
        $_POST['id'] = $_POST['update_id'];
        $dbReceita = new Receita($_POST);
        $dbReceita->update();
        addSuccessMsg("Receita alterada com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
} elseif (count($_POST ) > 2){
    try {
        $dbReceita = new Receita($_POST);
        $dbReceita->insert();
        addSuccessMsg("Receita cadastrada com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
}

$membros = Membro::get();
$receitas = Receita::getRevenues();

foreach ($receitas as $receita) {
    $receita->entrada = (new DateTime($receita->entrada))->format('d/m/Y');
}

loadTemplateView("revenue", [
    "membros" => $membros,
    "receitas" => $receitas,
    "exception" => $exception
]);