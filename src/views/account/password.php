<?php $this->setTitle('Cambiar contraseña') ?>

<div class="row">
    <div class="card col-md-4 offset-md-4">
        <div class="card-body">
            <?php $this->showAlerts() ?>

            <h4 class="card-title text-center mb-4">Cambiar contraseña</h5>
            
            <form method="post">
                <div class="row mb-3 mt-3">
                    <label class="col-form-label col-md-5">Contraseña actual</label>
                    <div class="col-md-7">
                        <input type="password" id="password" name="password" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-md-5">Nueva contraseña</label>
                    <div class="col-md-7">
                        <input type="password" id="newPassword" name="newPassword" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-md-5">Confirmar contraseña</label>
                    <div class="col-md-7">
                        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" />
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/just-validate@4.2.0/dist/just-validate.production.min.js"></script>
<script>
    (function () {
        const pwdInput = document.querySelector('#password'),
            newPwdInput = document.querySelector('#newPassword');

        const dictLocale = [
            { key: 'required', dict: { es: 'Obligatorio' } },
            { key: 'minLength', dict: { es: 'Mínimo :value caracteres' } }
        ];

        const validator = new JustValidate('form', undefined, dictLocale);
        
        validator.setCurrentLocale('es');

        validator
            .addField('#password', [{ rule: 'required' }])
            .addField('#newPassword', [
                { rule: 'required' }, { rule: 'minLength', value: 8 },
                { 
                    validator: value => value != pwdInput.value,
                    errorMessage: 'Debe ser diferente a la actual'
                }
            ])
            .addField('#confirmPassword', [
                { rule: 'required' },
                { 
                    validator: value => value == newPwdInput.value,
                    errorMessage: 'No coincide'
                }
            ]);

        validator.onSuccess(evt => { 
            document.querySelector('form').submit(); 
        });
    }());
</script>

