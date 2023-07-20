<?php

namespace App\Data;

use PDO;
use ReflectionClass;

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

    protected function saveOrUpdate($obj) {
        $className = get_class($obj);

        $vars = $this->getMapeableProperties($className);

        if ($obj->id == 0) {
            $query = $this->createInsertQuery($className, $vars);
        } else {
            $query = $this->createUpdateQuery($className, $vars);
        }

        $stm = $this->conn->prepare($query);

        foreach ($vars as $key) {
            if (isset($obj->$key)) {
                if (is_bool($obj->$key)) {
                    $stm->bindValue(':' . $key, $obj->$key, PDO::PARAM_BOOL);
                } else {
                    $stm->bindValue(':' . $key, $obj->$key);
                }                
            } else {
                $stm->bindValue(':' . $key, null);
            }
        }

        if ($obj->id == 0) {
            $stm->execute();

            $obj->id = $this->conn->lastInsertId();
        } else {
            $stm->bindValue(':id', $obj->id);

            $stm->execute();
        }
    }

    public function getById($id, $className) {
        $this->createConnection();

        $table = $this->getTableName($className);

        $stm = $this->conn->prepare('select * from ' . $table .  ' where id = :id');
        $stm->bindValue(':id', $id);

        $stm->execute();
        $row = $stm->fetch();

        $obj = new $className();

        if ($row) {
            $vars = array_keys(get_class_vars($className));

            $this->mapEntity($obj, $vars, $row);
        } else {
            $obj = null;
        }
       
        return $obj;
    }

    protected function getTableName($className) {
        return strtolower(substr($className, strrpos($className, '\\') + 1));
    }

    protected function createInsertQuery($className, $vars) {
        $table = $this->getTableName($className);

        $params = array_map(fn ($i) => ':' . $i, $vars);

        $query = 'insert into ' . $table 
            . ' (' . implode(',', $vars) . ') values ('
            . implode(',', $params) . ')';

        return $query;
    }

    protected function createUpdateQuery($className, $vars) {
        $table = $this->getTableName($className);

        $params = array_map(fn ($i) => $i . ' = :' . $i, $vars);

        $query = 'update ' . $table . ' set ' . implode(',', $params) . ' where id = :id';

        return $query;
    }

    protected function mapEntity($entity, $vars, $source) {
        foreach ($vars as $prop) {
            $dbName = strtolower($prop);

            if (isset($source[$dbName])) {
                $entity->$prop = $source[$dbName];
            }
        }
    }

    private function getMapeableProperties($className) {
        $reflection = new ReflectionClass($className);
        $props = $reflection->getProperties();

        $keys = [];

        foreach ($props as $property) {
            if ($property->hasType()) {
                $type = $property->getType();

                if ($type->getName() == 'object') {
                    continue;
                } 
            } 
            
            if ($property->name == 'id') {
                continue;
            }

            $keys[] = $property->name;
        }

        return $keys;
    }
}