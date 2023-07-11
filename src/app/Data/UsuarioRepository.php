<?php

namespace App\Data;

use App\Models\Usuario;

use PDO;

class UsuarioRepository extends BaseRepository {
    public function obtenerUsuario($login) {
        $this->createConnection();

        $stm = $this->conn->prepare('select * from usuario where login = :login');
        $stm->bindValue(':login', $login);

        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_CLASS, Usuario::class);

        return $stm->fetch();
    }    
}