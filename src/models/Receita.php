<?php

class Receita extends Model
{
    protected static $tableName = 'receita';
    protected static $columns = [
        'id',
        'categoria',
        'entrada',
        'valor',
        'origem',
        'forma_pagamento',
        'status',
        'id_membro'
    ];

    public function insert()
    {
        $this->valor = substr($this->valor, 3, strlen($this->valor));
        if (!$this->entrada) {
            $this->entrada = date('Y-m-d');
        }
        parent::insert();
    }

    public function update()
    {
        parent::update();
    }

    public static function getTotal($filters = [])
    {
        $result = static::getResultSetFromSelect($filters, 'sum(valor) as total');
        return $result->fetch_assoc()['total'];
    }

    public static function getTotalByCategory()
    {
        $sql = "select categoria, sum(valor) as 'total'
                from receita
                group by categoria";
        $result = Database::getResultFromQuery($sql);

        $data = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($data, $row);
            }
        }
        return $data;
    }

    public static function getTithe()
    {
        $sql = "select m.nome as 'nome', r.valor as 'valor', DATE_FORMAT(r.entrada,'%d/%m/%Y') as 'data'
                from membro m
                inner join receita r
                on m.id = r.id_membro
                where r.categoria = 'Dízimo'";
        $result = Database::getResultFromQuery($sql);

        $data = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($data, $row);
            }
        }
        return $data;
    }

    public static function getRevenues()
    {
        $sql = "select 	r.id as 'id', 
		                r.categoria as 'categoria', 
                        r.entrada as 'entrada', 
                        r.valor as 'valor', 
                        r.origem as 'origem', 
                        r.forma_pagamento as 'forma_pagamento',
                        r.status as 'status',
                        m.nome as 'id_membro'
                from receita r
                inner join membro m on r.id_membro = m.id";
                
        $result = Database::getResultFromQuery($sql);

        $receitas = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($receitas, new Receita($row));
            }
        }

        return $receitas;
    }

}