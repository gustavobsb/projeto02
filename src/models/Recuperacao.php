<?php

class Recuperacao extends Model {
    protected static $tableName = 'recuperacao';
    protected static $columns = [
        'email',
        'token'
    ];

    public static function deleteByEmailAndToken($email, $token)
    {
        $sql = "DELETE FROM " . static::$tableName . " WHERE email = '{$email}' AND token = '{$token}'";
        Database::executeSQL($sql);
    }
}