<?php

require_once './app/Router.php';

ini_set('session.name', 'sessionid');

session_start();

date_default_timezone_set('America/Guayaquil');

$router = new App\Router();
$router->dispatch();