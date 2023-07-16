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
    <h4 class="text-center mt-3">PCEI TENIENTE HUGO ORTÍZ</h4>
    <h5 class="text-center">CERTIFICADO DE INSCRIPCIÓN </h5>

    <p class="my-4" style="text-align:justify">
        El/la aspirante <?= $model->apellidos ?> <?= $model->nombres ?> portador/a del documento
        Nro. <?= $model->identificacion ?> fue inscrito en la Modalidad Educativa Virtual Intensiva en
        <?= $model->servicioEducativo == 'egb' ? 'Educación General Básica Superior EGB-S' : 'Bachillerato General BG' ?>
        el dia <?= date('d/m/Y',strtotime($model->fechaRegistro)) ?>
    </p>

    <div class="row">
        <div class="col-sm-6 offset-sm-3 col-md-4 offset-md-4">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Nacionalidad</td>
                        <td><?= ucfirst($model->nacionalidad) ?></td>
                    </tr>
                    <tr>
                        <td>Provincia</td>
                        <td><?= $model->ubicacion->provincia ?></td>
                    </tr>
                    <tr>
                        <td>Cantón</td>
                        <td><?= $model->ubicacion->canton ?></td>
                    </tr>
                    <tr>
                        <td>Correo</td>
                        <td><?= $model->correo ?></td>
                    </tr>
                    <tr>
                        <td>Teléfono</td>
                        <td><?= $model->telefonoPersonal ?></td>
                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td><?= $model->ubicacion->direccion ?></td>
                    </tr>
                    <tr>
                        <td>Distrito</td>
                        <td><?= $model->ubicacion->distrito ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center" style="margin-top:140px">
        <hr style="width:260px;margin:0 auto" />
        <?= $model->apellidos ?> <?= $model->nombres ?>
        <br />ASPIRANTE
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
