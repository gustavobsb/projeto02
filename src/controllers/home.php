<?php

session_start();
requireValidSession();

$totalReceitas = Receita::getTotal();
$totalDespesas = Despesa::getTotal();
$totalMembros  = Membro::getCount();
$saldoTotal    = $totalReceitas - $totalDespesas;

$aniversariantes = Membro::getBirthdays();

foreach ($aniversariantes as  $aniversariante) {
    $aniversariante->nascimento = (new DateTime($aniversariante->nascimento))->format('d/m/Y');
}

loadTemplateView('home', [
    'totalReceitas' => number_format($totalReceitas, 2),
    'totalDespesas' => number_format($totalDespesas, 2),
    'saldoTotal' => number_format($saldoTotal, 2),
    'totalMembros' => $totalMembros,
    'aniversariantes' => $aniversariantes
]);