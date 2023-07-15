<?php $this->setTitle('Registros de aspirantes') ?>

<?php $this->showAlerts() ?>

<h4>
    Registros de aspirantes
</h4>

<form>
    <div class="row row-cols-lg-auto g-3 align-items-center justify-content-end my-4">
        <div class="col-12">
            <input type="text" placeholder="Buscar" name="search" value="<?= $model['search'] ?>" class="form-control" />
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-secondary">Buscar</button>
            <a href="<?= $this->url('/registro/form') ?>" class="btn btn-primary">Nuevo</a>
        </div>
    </div>

    <table class="table table-bordered table-striped table-hover">
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
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Opciones
                            </a>
                            <div class="dropdown-menu">
                                <a href="<?= $this->url('/registro/form?id=' . $item->id) ?>" class="dropdown-item">Editar</a>
                                <a href="<?= $this->url('/registro/delete?id=' . $item->id) ?>" class="dropdown-item confirm-delete">Eliminar</a>
                            </div>
                        </div>                      
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
    <div class="row">
        <div class="col-md-6">
            <?= $model['count'] ?> registro(s)
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <ul class="card page-control">
                <?php if ($model['page'] > 1): ?>
                    <li><a href="#" title="Anterior" class="page-change" data-value="-1"><<</a></li>
                <?php else: ?>
                    <li><span><<</span></li>
                <?php endif ?>

                <li><span>Página</span></li>
                <li><span><input id="page" name="page" type="text" value="<?= $model['page'] ?>"></span></li>
                <li><span id="total-pages">de <?= $model['totalPages'] ?></span></li>
                
                <?php if ($model['page'] < $model['totalPages']): ?>
                    <li><a href="#" title="Siguiente" class="page-change" data-value="1">>></a></li>
                <?php else: ?>
                    <li><span>>></span></li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</form>

<script type="text/javascript">
    (function () {
        let totalPages = <?= $model['totalPages'] ?>;

        let form = document.querySelector('form');

        let inputPage = document.querySelector('#page');

        inputPage.addEventListener('change', function () {
            form.submit();
        });
      
        document.querySelectorAll('.page-change').forEach(function (a) {
            a.addEventListener('click', function (evt) {
                let value = parseInt(inputPage.value);

                let newValue = value + parseInt(this.dataset.value);

                if (newValue > 0 && newValue <= totalPages) {
                    inputPage.value = newValue;
                    form.submit();
                }
            });
        });

        document.addEventListener('click', function (evt) {
            if (event.target.matches('.confirm-delete')) {
                if (confirm('Deseas eliminar el registro?')) {
                    let form = document.createElement('form');
                    form.method = 'post';
                    form.action = a.href;

                    document.querySelector('body').appendChild(form);
                    form.submit();
                }

                evt.preventDefault();
            }
        });
    }());
</script>