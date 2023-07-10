<?php

namespace App\Models;

class Ubicacion {
    public int $id = 0;

    public string $provincia;

    public string $zona;

    public string $canton;

    public string $distrito;

    public string $parroquia;

    public string $circuito;

    public string $sector;
    
    public string $direccion;

    public int $aspirante_id= 0;
}