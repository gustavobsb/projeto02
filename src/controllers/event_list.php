<?php

session_start();
requireValidSession();
$exception = null;

if (isset($_POST['delete_id'])) {
    try {
        Agenda::deleteById($_POST['delete_id']);
        addSuccessMsg("Evento excluído com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
} elseif (isset($_POST['update_id'])) {
    try {
        $_POST['id'] = $_POST['update_id'];
        $dbAgenda = new Agenda($_POST);
        $dbAgenda->update();
        addSuccessMsg("Evento alterado com sucesso.");
    } catch (Exception $e) {
        $exception = $e;
    }
}
$agenda = Agenda::get();

loadTemplateView('event_list',[
    'agendas' => $agenda
]);