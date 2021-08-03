<?php

session_start();
requireValidSession(true);
$exception = null;

$totalDespesa = Despesa::getTotal();
$totalReceita = Receita::getTotal();
$extratos = Extrato::get();
$saldo = $totalReceita - $totalDespesa;

foreach ($extratos as $extrato) {
    $extrato->entrada = (new DateTime($extrato->entrada))->format('d/m/Y');
    $sign = ($extrato->tipo == 'Receita') ? '+' : '-';
    $extrato->valor = "{$sign}{$extrato->valor}";
}

loadTemplateView('extract', [
    'extratos' => $extratos,
    'despesa' => $totalDespesa,
    'receita' => $totalReceita,
    'saldo' => $saldo
]);