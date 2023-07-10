<?php

namespace App\Models;

class Aspirante {
    public int $id = 0;
    public string $nombres;
    public string $apellidos;
    public string $tipoIdentificacion;
    public string $identificacion;
    public string $fechaNacimiento;
    public string $fechaRegistro;
    public string $genero;
    public string $nacionalidad;
    public string $estadoCivil;
    public string $definicionEtnica;
    public string $puebloIndigena;
    public bool $tieneHijos = false;
    public string $hijosNinos;
    public string $hijosAdolescentes;
    public string $hijosAdultos;
    public string $hijosGestacion;
    public bool $discapacidad = false;
    public string $tipoDiscapacidad;
    public string $porcentajeDiscapacidad;
    public string $telefonoPersonal;
    public string $telefonoFamiliar;
    public string $correo;
    public bool $recibeBono = false;
    public bool $trabaja = false;
    public string $actividadLaboral;
    public string $aniosRezago;
    public string $anioAprobado;
    public string $regimen;
    public string $servicioEducativo;
}