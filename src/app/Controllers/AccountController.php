<?php

namespace App\Controllers;

use App\Data\UsuarioRepository;

class AccountController extends BaseController {
    private $repo;

    public function __construct() {
        $this->repo = new UsuarioRepository();
    }

    public function login() {
        if ($this->isPost()) {
            $login = $_POST['login'];
            $pwd = $_POST['password'];

            if ($login && $pwd) {
                $usuario = $this->repo->obtenerUsuario($login);

                if ($usuario && $usuario->activo && password_verify($pwd, $usuario->password)) {
                    $_SESSION['userId'] = $usuario->id;
                    $_SESSION['userLogin'] = $usuario->login;
                    $_SESSION['userName'] = $usuario->nombre;

                    return $this->redirect('/registro');
                }
            }

            $this->errorMsg('Usuario o contraseña incorrectos');
        }

        return $this->view('account/login');
    }

    public function logout() {
        session_start();
        session_destroy();

        return $this->redirect('/account/login');
    }
}