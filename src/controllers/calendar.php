<?php
session_start();
requireValidSession();

if (count($_POST ) > 0){
    try {
        $dbAgenda = new Agenda($_POST);
        $dbAgenda->insert();
        addSuccessMsg("Evento cadastrado com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
}
loadTemplateView('calendar');