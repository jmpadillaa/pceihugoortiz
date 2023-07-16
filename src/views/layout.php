<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="TENIENTE HUGO ORTIZ">
    <title><?= $pageTitle ?> | Teniente Hugo Ortíz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $this->url('/public/css/style.css') ?>" media="screen">
    <link rel="shortcut icon" href="<?= $this->url('/public/img/icon.png') ?>" />
</head>
<body>
    <div class="navbar navbar-expand-lg fixed-top bg-body-tertiary" style="">
        <div class="container">
            <span class="navbar-brand">Tnte. Hugo Ortíz</span>
            <?php if($this->isAuthenticated()): ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $this->url('/registro') ?>">Registro aspirantes</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-md-auto">            
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="theme-menu" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme">
                                <?= $this->userLogin() ?>
                                <i class="bi bi-circle-half"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="<?= $this->url('/account/password') ?>">Cambiar contraseña</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= $this->url('/account/logout') ?>">Salir</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <?php endif ?>
        </div>
    </div>
    <div class="container">       
        <?= $responseBody ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
