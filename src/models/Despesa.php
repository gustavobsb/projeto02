<?php

class Despesa extends Model
{
    protected static $tableName = 'despesa';
    protected static $columns = [
        'id',
        'categoria',
        'entrada',
        'valor',
        'tipo',
        'status',
        'descricao',
        'centro_custo'
    ];

    public function insert()
    {
        $this->valor = substr($this->valor, 3, strlen($this->valor));
        if (!$this->entrada) {
            $this->entrada = date('Y-m-d');
        }
        parent::insert();
    }

    public static function getTotal($filters = [])
    {
        $result = static::getResultSetFromSelect($filters, 'sum(valor) as total');
        return $result->fetch_assoc()['total'];
    }

    public static function getTotalByCategory()
    {
        $sql = "select categoria, sum(valor) as 'total'
                from despesa
                group by categoria
                limit 5";
        $result = Database::getResultFromQuery($sql);

        $data = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($data, $row);
            }
        }
        return $data;
    }

    public static function getTotalsByCategories()
    {
        $sql = "select categoria, sum(valor) as 'total'
                from despesa
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
}