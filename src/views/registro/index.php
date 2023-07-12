<?php $this->setTitle('Registros de aspirantes') ?>

<script type="text/javascript">
    function confirmDelete (a) {
        if (confirm('Deseas eliminar el registro?')) {
            let form = document.createElement('form');
            form.method = 'post';
            form.action = a.href;

            document.querySelector('body').appendChild(form);
            form.submit();
        }

        return false;
    };
</script>

<?php $this->showAlerts() ?>

<h4>
    Registros de aspirantes
    <a href="<?= $this->url('/registro/form') ?>" class="btn btn-primary float-end">Nuevo</a>
</h4>

<form class="row row-cols-lg-auto g-3 align-items-center justify-content-center my-4">
    <div class="col-12">
        <input type="text" placeholder="Buscar" name="search" class="form-control" />
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-secondary">Buscar</button>
    </div>
</form>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th></th>
            <th>Identificación</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>F. registro</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Servicio</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($model['list'] as $item): ?>
            <tr>
                <td>
                    <a href="<?= $this->url('/registro/form?id=' . $item->id) ?>">Editar</a> |
                    <a href="<?= $this->url('/registro/delete?id=' . $item->id) ?>" onclick="return confirmDelete(this);">Eliminar</a>
                </td>
                <td><?= $item->identificacion ?></td>
                <td><?= $item->nombres ?></td>
                <td><?= $item->apellidos ?></td>
                <td><?= $item->fechaRegistro ?></td>
                <td><?= $item->telefonoPersonal ?></td>
                <td><?= $item->correo ?></td>
                <td><?= $item->servicioEducativo ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $model['count'] ?> registro(s)