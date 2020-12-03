<?php

require_once "controllers/errores.php";

class App{
    function __construct() {

        $url = isset($_GET["url"]) ? $_GET["url"] : null; // ['controlador/metodo']

        $url = rtrim($url, '/');
        $url = explode('/', $url); // {0: 'controlador', 1: 'metodo'}

        $controller_name = $url[0];

        // Cuando no se ingresa controlador
        if(empty($controller_name)) {
            $controller_file = "controllers/main.php";
            require_once $controller_file;
            $controller = new Main();
            $controller->loadModel($url[0]);
            $controller->render();
            return false;    
        }
        
        $controller_file = "controllers/{$controller_name}.php";

        if(file_exists($controller_file)) {

            require_once $controller_file;
            $controller = new $controller_name();
            $controller->loadModel($url[0]);
            
            if(isset($url[1])) {

                $method = $url[1];
                $controller->{$method}();
            }
            else {
                $controller->render();
            }
        }
        else {
            $controller = new Errores();
        }
    }
}