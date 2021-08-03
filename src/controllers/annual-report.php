<?php

session_start();
requireValidSession();

$contribuicao = [];

if (isset($_POST['membro'])) {
    $contribuicao = Membro::getContribution($_POST['membro']);
} elseif (!isset($_POST['membro'])) {
    $contribuicao = Membro::getContribution($_SESSION['user']->id);
}

$membros = Membro::get();

loadTemplateView('annual-report', [
    "membros" => $membros,
    "contribuicoes" => $contribuicao
]);