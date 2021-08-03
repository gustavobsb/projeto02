<?php

session_start();
requireValidSession();

$dizimos = Receita::getTithe(true);

loadTemplateView('tithe', [
    'dizimos' => $dizimos
]);