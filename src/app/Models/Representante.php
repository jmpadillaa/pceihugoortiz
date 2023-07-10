<?php

namespace App\Models;

class Representante {
    public int $id = 0;

    public string $parentesco;

    public string $nombres;

    public string $apellidos;

    public string $tipoIdentificacion;

    public string $identificacion;

    public string $genero;

    public string $estadoCivil;

    public string $fechaNacimiento;

    public int $aspirante_id = 0;
}