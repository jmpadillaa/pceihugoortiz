<?php

namespace App;

class Router {
    public function dispatch() {
        $route = self::getRoute();

        $controller = 'App\\Controllers\\' . $route['controller'];

        $instance = new $controller();
        
        // $controller::{$method}(...$args)
        $result = call_user_func_array(array($instance, $route['action']), $route['args']);

        $result();
    }

    private function getRoute() {
        $parts = self::getURLParts();

        $partsLen = count($parts);

        $controllerName = $parts[0] ?? '';
        $actionName = $parts[1] ?? '';

        parse_str($_SERVER['QUERY_STRING'], $args);

        if (empty($controllerName)) {
            $controllerName = 'HomeController';
        } else {
            $controllerName = ucfirst($controllerName) . 'Controller';
        }

        if (empty($actionName)) {
            $actionName = 'index';
        }

        return array (
            'controller' => $controllerName,
            'action' => $actionName,
            'args' => $args
        );
    }

    private function getURLParts() {
        $url = $_SERVER['REQUEST_URI'];

        $pos = strpos($url, '?');

        if ($pos) {
            $url = substr($url, 0, $pos);
        }
        
        if (defined('APP_ROOT_PATH')) {
            $url = substr($url, strlen(APP_ROOT_PATH));
        }

        $url = filter_var(trim($url, '/'), FILTER_SANITIZE_URL);

        return explode('/', $url);
    }
}
