<?php

namespace App\Data;

use PDO;

abstract class BaseRepository {
    protected $conn;

    protected function createConnection() {
        if (!isset($this->conn)) {
            $dsn = 'pgsql:host=' . APP_DB_HOST . ';dbname=' . APP_DB_NAME;

            $options = array(
                PDO::ATTR_PERSISTENT => true, 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            $this->conn = new PDO($dsn, APP_DB_USER, APP_DB_PWD, $options);
        }
    }

    protected function insert($obj) {
        $className = get_class($obj);
        $vars = get_class_vars($className);

        unset($vars['id']);

        $query = $this->createInsertQuery($className, array_keys($vars));

        $stm = $this->conn->prepare($query);

        foreach ($vars as $key => $value) {
            if (isset($obj->$key)) {
                $stm->bindValue(':' . $key, $obj->$key);
            } else {
                $stm->bindValue(':' . $key, null);
            }
        }

        $stm->execute();

        $obj->id = $this->conn->lastInsertId();
    }

    protected function createInsertQuery($className, $vars) {
        $table = strtolower(substr($className, strrpos($className, '\\') + 1));

        $params = array_map(fn ($i) => ':' . $i, $vars);

        $query = 'insert into ' . $table 
            . ' (' . implode(',', $vars) . ') values ('
            . implode(',', $params) . ')';

        return $query;
    }
}