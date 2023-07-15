<?php

require_once './app/Router.php';

ini_set('session.name', 'sessionid');

if (defined('APP_MEMCACHED_HOST')) {
    ini_set('session.save_handler', 'memcached');
    ini_set('session.save_path', APP_MEMCACHED_HOST);
    ini_set('memcached.sess_prefix', 'memc.inscripcion.');
    ini_set('memcached.sess_lock_expire', 7200);
}

session_start();

date_default_timezone_set('America/Guayaquil');

$router = new App\Router();
$router->dispatch();