<?php

namespace App\Data;

use App\Models\Ubicacion;

class RegistroRepository extends BaseRepository {
    public function guardar($aspirante, $rep, $ubicacion) {
        try {
            $this->createConnection();

            $this->conn->beginTransaction();

            $this->insert($aspirante);

            $rep->aspirante_id = $aspirante->id;
            $ubicacion->aspirante_id = $aspirante->id;

            $this->insert($rep);
            $this->insert($ubicacion);

            $this->conn->commit();
        } catch (Exception $e) {
            $this->conn->rollBack();

            throw $e;
        }
    }
}