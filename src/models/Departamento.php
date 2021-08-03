<?php

class Departamento extends Model
{
    protected static $tableName = 'departamento';
    protected static $columns = [
        'id',
        'nome_departamento',
        'descricao',
        'id_lider'
    ];

    public static function getDepartamentos()
    {
        $result = Database::getResultFromQuery("
            select d.id as 'id', 
                d.nome_departamento as 'nome_departamento', 
                d.descricao as 'descricao', 
                m.nome as 'id_lider'
            from departamento d
            inner join membro m
            on d.id_lider = m.id
        ");

        $departamentos = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($departamentos, new Departamento($row, false));
            }
        }
        return $departamentos;
    }
}