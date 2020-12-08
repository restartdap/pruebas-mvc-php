<?php

require_once "controllers/errores.php";

class App{
    function __construct() {

        $url = isset($_GET["url"]) ? $_GET["url"] : null; // ['controlador/metodo']

        $url = rtrim($url, '/');
        $url = explode('/', $url); // {0: 'controlador', 1: 'metodo', 2 - n: 'parametros'}

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
        
        // Cuando si se ingresa controlador
        $controller_file = "controllers/{$controller_name}.php";

        if(file_exists($controller_file)) {

            require_once $controller_file;
            $controller = new $controller_name();
            $controller->loadModel($controller_name);
            
            $elements_of_url = sizeof($url);

            if($elements_of_url > 1) {
                // Se verifica que haya parametros para la funcion
                if($elements_of_url > 2) {
                    $parameters = [];
                    for ($i=2; $i < $elements_of_url; $i++) { 
                        array_push($parameters, $url[$i]);
                    }

                    $controller->{$url[1]}($parameters);
                } 
                else {
                    $controller->{$url[1]}();
                }
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