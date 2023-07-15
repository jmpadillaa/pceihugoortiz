<!DOCTYPE html>
<html lang="es">
<head>
    <meta content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta content="TENIENTE HUGO ORTIZ">
    <title>Imprimir registro | Teniente Hugo Ortíz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="text-center">
        <img src="<?= $this->url('/public/img/logo-institucion.jpg') ?>">
    </div>
    <h4 class="text-center">PCEI Teniente Hugo Ortíz</h4>
    <h5 class="text-center">Registro de aspirante</h5>

    <p class="text-end">Fecha registro: <?= $model->fechaRegistro ?></p>

    <h6 class="my-3">A. INFORMACIÓN DEL ASPIRANTE</h6>
    <div class="row mb-2">
        <label class="col-sm-3">Nombres:</label>
        <label class="col-sm-3"><?= $model->nombres ?></label>
        <label class="col-sm-3">Apellidos:</label>
        <label class="col-sm-3"><?= $model->apellidos ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Documento:</label>
        <label class="col-sm-3"><?= $model->tipoIdentificacion ?></label>
        <label class="col-sm-3">Número:</label>
        <label class="col-sm-3"><?= $model->identificacion ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Fecha de nacimiento:</label>
        <label class="col-sm-9"><?= $model->fechaNacimiento ?></label>
    </div>

    <h6 class="mt-4 mb-3">B. DATOS DEL REPRESENTANTE LEGAL</h6>
    <div class="row mb-2">
        <label class="col-sm-3">Tipo de parentesco:</label>
        <label class="col-sm-3"><?= $model->representante->parentesco ?></label>
        <label class="col-sm-3">Género:</label>
        <label class="col-sm-3"><?= $model->representante->genero == 'M' ? 'Masculino' : 'Femenino' ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Nombres:</label>
        <label class="col-sm-3"><?= $model->representante->nombres ?></label>
        <label class="col-sm-3">Apellidos:</label>
        <label class="col-sm-3"><?= $model->representante->apellidos ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Documento:</label>
        <label class="col-sm-3"><?= $model->representante->tipoIdentificacion ?></label>
        <label class="col-sm-3">Número:</label>
        <label class="col-sm-3"><?= $model->representante->identificacion ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Estado Civil:</label>
        <label class="col-sm-3"><?= $model->representante->estadoCivil ?></label>
        <label class="col-sm-3">Fecha de nacimiento:</label>                    
        <label class="col-sm-3"><?= $model->representante->fechaNacimiento ?></label>
    </div>

    <h6 class="mt-4 mb-3">C. DATOS ADICIONALES DEL ASPIRANTE</h6>
    <div class="row mb-2">
        <label class="col-sm-3">Género:</label>
        <label class="col-sm-3"><?= $model->genero == 'M' ? 'Masculino' : 'Femenino' ?></label>
        <label class="col-sm-3">Nacionalidad:</label>
        <label class="col-sm-3"><?= $model->nacionalidad ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Estado Civil:</label>
        <label class="col-sm-9"><?= $model->estadoCivil ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Autodefinición étnica:</label>                  
        <label class="col-sm-3"><?= $model->definicionEtnica ?></label>
        <label class="col-sm-3">Pueblo Indígena:</label>
        <label class="col-sm-3"><?= $model->puebloIndigena ?></label>
    </div>

    <h6 class="mt-4 mb-3">D. DATOS FAMILIARES</h6>
    <div class="row mb-2">
        <label class="col-sm-3">¿Tiene hijos?</label>
        <label class="col-sm-3"><?= $model->tieneHijos ? 'Si' : 'No' ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Hijos de 0-5 años:</label>
        <label class="col-sm-3"><?= $model->hijosNinos ?></label>
        <label class="col-sm-3">Hijos de 6-17 años:</label>
        <label class="col-sm-3"><?= $model->hijosAdolescentes ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Hijos de 18 años en adelante:</label>
        <label class="col-sm-3"><?= $model->hijosAdultos ?></label>
        <label class="col-sm-3">En estado de gestación:</label>
        <label class="col-sm-3"><?= $model->hijosGestacion ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">¿Tiene discapacidad?</label>
        <label class="col-sm-3"><?= $model->discapacidad ? 'Si' : 'No' ?></label>
        <label class="col-sm-3">Tipo de discapacidad:</label>
        <label class="col-sm-3"><?= $model->tipoDiscapacidad ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Porcentaje:</label>
        <label class="col-sm-3"><?= $model->porcentajeDiscapacidad ?></label>
        <label class="col-sm-3">Correo electrónico:</label>
        <label class="col-sm-3"><?= $model->correo ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Teléfono:</label>
        <label class="col-sm-3"><?= $model->telefonoPersonal ?></label>
        <label class="col-sm-3">Teléfono convencional o de un familiar:</label>
        <label class="col-sm-3"><?= $model->telefonoFamiliar ?></label>
    </div>

    <h6 class="mt-4 mb-3">E. PREGUNTAS INFORMATIVAS DEL ASPIRANTE.</h6>
    <div class="row mb-2">
        <label class="col-sm-3">¿Recibe Bono de Desarrollo Humano?</label>
        <label class="col-sm-3"><?= $model->recibeBono ? 'Si' : 'No' ?></label>
        <label class="col-sm-3">¿Tiene Trabajo?</label>
        <label class="col-sm-3"><?= $model->trabaja ? 'Si' : 'No' ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Actividad Laboral:</label>
        <label class="col-sm-3"><?= $model->actividadLaboral ?></label>
        <label class="col-sm-3">Años de rezago educativo del aspirante:</label>
        <label class="col-sm-3"><?= $model->aniosRezago ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Último año aprobado:</label>
        <label class="col-sm-3"><?= $model->anioAprobado ?></label>                       
        <label class="col-sm-3">Regimen:</label>
        <label class="col-sm-3"><?= $model->regimen ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-3">Servicio educativo al que desea inscribirse:</label>
        <label class="col-sm-9"><?= $model->servicioEducativo ?></label>
    </div>

    <h6 class="mt-4 mb-3">F. UBICACIÓN DEL ASPIRANTE O LUGAR DONDE DESEA ACCEDER AL SERVICIO EDUCATIVO.</h6>
    <div class="row mb-2">
        <label class="col-sm-2">Provincia:</label>
        <label class="col-sm-2"><?= $model->ubicacion->provincia ?></label>
        <label class="col-sm-2">Zona:</label>
        <label class="col-sm-2"><?= $model->ubicacion->zona ?></label>
        <label class="col-sm-2">Cantón:</label>
        <label class="col-sm-2"><?= $model->ubicacion->canton ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-2">Distrito:</label>
        <label class="col-sm-2"><?= $model->ubicacion->distrito ?></label>
        <label class="col-sm-2">Parroquia:</label>
        <label class="col-sm-2"><?= $model->ubicacion->parroquia ?></label>
        <label class="col-sm-2">Circuito:</label>
        <label class="col-sm-2"><?= $model->ubicacion->circuito ?></label>
    </div>
    <div class="row mb-2">
        <label class="col-sm-2">Sector:</label>
        <label class="col-sm-2"><?= $model->ubicacion->sector ?></label>
        <label class="col-sm-2">Dirección</label>
        <label class="col-sm-6"><?= $model->ubicacion->direccion ?></label>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
