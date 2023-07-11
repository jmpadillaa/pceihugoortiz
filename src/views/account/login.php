<?php $this->setTitle('Ingresar') ?>

<div class="row">
    <div class="card col-md-4 offset-md-4">
        <div class="card-body">
            <?php $this->showAlerts() ?>

            <h4 class="card-title text-center mb-3">Iniciar sesión</h5>
            
            <form method="post">
                <div class="mb-3">
                    <label>Usuario</label>
                    <input type="text" name="login" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control" required />
                </div>

                <div class="text-center">
                    <input type="submit" value="Ingresar" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</div>