<?php

namespace App\Controllers;

use App\Core\RedirectResult;
use App\Core\ViewResult;

abstract class BaseController {
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