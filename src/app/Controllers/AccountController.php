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

    public function password() {
        if (!$this->isAuthenticated()) {
            return $this->redirect('/account/login');
        }

        if ($this->isPost()) {
            $pwd = $_POST['password'];
            $newPwd = $_POST['newPassword'];

            $usuario = $this->repo->obtenerUsuario($_SESSION['userLogin']);

            if (password_verify($pwd, $usuario->password)) {
                $usuario->password = password_hash($newPwd, PASSWORD_BCRYPT);
                $this->repo->guardarUsuario($usuario);

                $this->successMsg('Tu contraseña ha sido cambiada');

                return $this->redirect('/registro');
            } else {
                $this->errorMsg('La contraseña actual no es correcta');
            }
        }

        return $this->view('account/password');
    }
}