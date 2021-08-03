<?php

session_start();
requireValidSession(true);

$receitas = Receita::getTotalByCategory();

loadTemplateView('revenue-report', [
    'receitas' => $receitas
]);