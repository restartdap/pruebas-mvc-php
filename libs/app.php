<?php

require_once "controllers/errores.php";

class App{
    function __construct() {

        $url = $_GET["url"]; // ['controlador/metodo']

        $url = rtrim($url, '/');
        $url = explode('/', $url); // {0: 'controlador', 1: 'metodo'}

        $controller_name = $url[0];

        $controller_file = "controllers/{$controller_name}.php";

        if(file_exists($controller_file)) {

            require_once $controller_file;
            $controller = new $controller_name();

            if(isset($url[1])) {

                $method = $url[1];
                $controller->{$method}();
            }
        }
        else {
            $controller = new Errores();
        }
    }
}