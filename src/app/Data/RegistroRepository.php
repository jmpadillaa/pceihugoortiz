<?php

namespace App\Data;

use App\Models\Aspirante;
use App\Models\Representante;
use App\Models\Ubicacion;

use PDO;

class RegistroRepository extends BaseRepository {
    public function listar($buscar, $limit, $offset) {
        $this->createConnection();

        $query = 'select * from aspirante where ' . 
            '(identificacion ilike :buscar or nombres ilike :buscar or apellidos ilike :buscar)' .
            'limit :limit offset :offset';

        $stm = $this->conn->prepare($query);
        $stm->bindValue(':buscar', '%' . $buscar . '%');
        $stm->bindValue(':limit', $limit);
        $stm->bindValue(':offset', $offset);

        $stm->execute();

        $list = [];

        $rows = $stm->fetchAll();

        $vars = array_keys(get_class_vars(Aspirante::class));

        foreach($rows as $row) {
            $a = new Aspirante();

            $this->mapEntity($a, $vars, $row);

            $list[] = $a;
        }

        return $list;
    }

    public function obtenerAspirante($id) {
        $a = $this->getById($id, Aspirante::class);
        $a->representante = $this->getById($a->representante_id, Representante::class);
        $a->ubicacion = $this->getById($a->ubicacion_id, Ubicacion::class);
        
        return $a;
    }

    public function guardarAspirante($aspirante) {
        try {
            $this->createConnection();

            $this->conn->beginTransaction();

            $this->saveOrUpdate($aspirante->representante);
            $this->saveOrUpdate($aspirante->ubicacion);

            $aspirante->representante_id = $aspirante->representante->id;
            $aspirante->ubicacion_id = $aspirante->ubicacion->id;

            $this->saveOrUpdate($aspirante);

            $this->conn->commit();
        } catch (Exception $e) {
            $this->conn->rollBack();

            throw $e;
        }
    }

    public function eliminarAspirante($id) {
        try {
            $this->createConnection();

            $this->conn->beginTransaction();

            $a = $this->getById($id, Aspirante::class);

            $stm = $this->conn->prepare('delete from aspirante where id = :id');
            $stm->bindValue(':id', $id);
            $stm->execute();

            $stm = $this->conn->prepare('delete from ubicacion where id = :id');
            $stm->bindValue(':id', $a->ubicacion_id);
            $stm->execute();            

            $stm = $this->conn->prepare('delete from representante where id = :id');
            $stm->bindValue(':id', $a->representante_id);
            $stm->execute();

            $this->conn->commit();
        } catch (Exception $e) {
            $this->conn->rollBack();

            throw $e;
        }
    }
}