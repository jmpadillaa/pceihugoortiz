<?php

spl_autoload_register(function ($class) {
    $basedir = __DIR__ . '/app/';

    $prefix = 'App\\';

    $name = substr($class, strlen($prefix));

    $file = $basedir . str_replace('\\', '/', $name) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});