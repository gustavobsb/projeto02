<?php

class Cargo extends Model {
    protected static $tableName = 'cargo';
    protected static $columns = [
        'id',
        'nome_cargo',
        'descricao'
    ];
}