<?php

class Extrato extends Model
{
    protected static $tableName = 'extrato';
    protected static $columns = [
        'categoria',
        'entrada',
        'valor',
        'tipo'
    ];

}