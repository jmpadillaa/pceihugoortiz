<?php

namespace App\Controllers;

use App\Core\RedirectResult;
use App\Core\ViewResult;

abstract class BaseController {
    protected function isAuthenticated() {
        return session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['userId']);
    }

    protected function isPost() {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    protected function errorMsg($msg) {
        $this->createMsg($msg, 'danger');
    }

    protected function successMsg($msg) {
        $this->createMsg($msg, 'success');
    }

    protected function createMsg($msg, $key) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['alerts'][$key] = $msg;
    }

    protected function redirect($path) {
        if (defined('APP_ROOT_PATH')) {
            $path = APP_ROOT_PATH . $path;
        }

        return new RedirectResult($path);
    }

    protected function view($viewPath, $model = null, $layout = 'layout') {
        return new ViewResult($viewPath, $layout, $model);
    }
}