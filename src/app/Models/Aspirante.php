<?php

namespace App\Models;

class Aspirante {
    public int $id = 0;
    public $nombres;
    public $apellidos;
    public $tipoIdentificacion;
    public $identificacion;
    public $fechaNacimiento;
    public $fechaRegistro;
    public $genero;
    public $nacionalidad;
    public $estadoCivil;
    public $definicionEtnica;
    public $puebloIndigena;
    public bool $tieneHijos = false;
    public $hijosNinos;
    public $hijosAdolescentes;
    public $hijosAdultos;
    public $hijosGestacion;
    public bool $discapacidad = false;
    public $tipoDiscapacidad;
    public $porcentajeDiscapacidad;
    public $telefonoPersonal;
    public $telefonoFamiliar;
    public $correo;
    public bool $recibeBono = false;
    public bool $trabaja = false;
    public $actividadLaboral;
    public $aniosRezago;
    public $ultimoAprobado;
    public $anioInscribe;
    public $convocatoria;
    public $servicioEducativo;

    public int $representante_id = 0;
    public int $ubicacion_id = 0;
    public int $usuario_id = 0;

    public object $representante;
    public object $ubicacion;
    public object $usuario;
}