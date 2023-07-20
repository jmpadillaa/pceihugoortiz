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
        <img src="<?= $this->url('/public/img/ministerio-gobierno.jpeg') ?>" style="width: 200px" />
        <img src="<?= $this->url('/public/img/escudo.jpeg') ?>" style="width: 100px" />
    </div>

    <h5 class="text-center mt-4">CERTIFICADO DE INSCRIPCIÓN </h5>

    <p class="my-4" style="text-align:justify">
        El/la aspirante <?= $model->apellidos ?> <?= $model->nombres ?> portador/a del documento
        Nro. <?= $model->identificacion ?> fue inscrito en la Modalidad Educativa: A DISTANCIA VIRTUAL
        del Colegio de Bachillerato Teniente Hugo Ortiz, en el Periodo: CONVOCATORIA 1, en
        <?= $model->servicioEducativo == 'egb' ? 'Básica superior' : 'Bachillerato' ?>,
        el dia <?= date('d/m/Y',strtotime($model->fechaRegistro)) ?>
    </p>

    <div class="row">
        <div class="col-sm-6 offset-sm-3 col-md-4 offset-md-4">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="bg-warning-subtle">Nacionalidad</td>
                        <td><?= ucfirst($model->nacionalidad) ?></td>
                    </tr>
                    <tr>
                        <td class="bg-warning-subtle">Provincia</td>
                        <td><?= $model->ubicacion->provincia ?></td>
                    </tr>
                    <tr>
                        <td class="bg-warning-subtle">Cantón</td>
                        <td><?= $model->ubicacion->canton ?></td>
                    </tr>
                    <tr>
                        <td class="bg-warning-subtle">Correo</td>
                        <td><?= $model->correo ?></td>
                    </tr>
                    <tr>
                        <td class="bg-warning-subtle">Teléfono</td>
                        <td><?= $model->telefonoPersonal ?></td>
                    </tr>
                    <tr>
                        <td class="bg-warning-subtle">Dirección</td>
                        <td><?= $model->ubicacion->direccion ?></td>
                    </tr>
                    <tr>
                        <td class="bg-warning-subtle">Distrito</td>
                        <td><?= $model->ubicacion->distrito ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row" style="margin-top:120px">
        <div class="col text-center">
            <hr style="width:260px;margin:0 auto" />
            <?= $model->apellidos ?> <?= $model->nombres ?>
            <br />ASPIRANTE
        </div>
        <div class="col text-center">
            <hr style="width:260px;margin:0 auto" />
            Sandra Bravo
            <br />INSCRIPTOR
        </div>
    </div>    

    <div class="mt-4" style="font-size:0.7rem">
        <p>
            Fecha de inicio de clases 30 de agosto de 2023.
        </p>

        <p style="text-align:justify">
            <strong>Nota de descargo:</strong>
            El/la aspirante declara que la información entregada en el presente documento 
            es veraz y verificable.
        </p>

        <p style="text-align:justify">
            El/la aspirante expresa que se acogerá a las responsabilidades, obligaciones y demás 
            deberes que la modalidad Educativa a Distancia demande.
        </p>

        <p style="text-align:justify">
            Concluida la inscripción, a partir de la fecha señalada en este documento y en el calendario 
            académico correspondiente a la convocatoria; El/la aspirante debe ingresar a la página 
            de la Modalidad Educativa: pceitenientehugoortiz.edu.ec con el numero de identificación 
            tanto en usuario como en contraseña.
        </p>

        <p style="text-align:justify">
            El/la aspirante NO pondrá acceder a la plataforma educativa hasta las fechas indicadas 
            en este documento.
        </p>

        <p style="text-align:justify">
            Si la información detallada en este certificado no es correcta podrá solicitar una 
            corrección, a través del correo de soporte: soporteadistancia@gmail.com con 
            el ASUNTO corrección datos.
        </p>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
