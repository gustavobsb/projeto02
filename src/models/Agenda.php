<?php

class Agenda extends Model {
    protected static $tableName = 'agenda';
    protected static $columns = [
        'id',
        'title',
        'color',
        'start',
        'end'
    ];

    public static function getAgenda(){
        $sql = "select * from agenda";
        $result = Database::getResultFromQuery($sql);
        $data = [];

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($data, $row);
            }
        }
        return $data;
    }

}