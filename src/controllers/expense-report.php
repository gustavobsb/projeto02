<?php

session_start();
requireValidSession(true);

$despesas = Despesa::getTotalsByCategories();

loadTemplateView('expense-report', [
    'despesas' => $despesas
]);