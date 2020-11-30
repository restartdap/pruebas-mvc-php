<?php

require_once "controllers/errores.php";

class App{
    function __construct() {
        echo "<p>Nueva App</p>";

        $url = $_GET["url"];
        echo "<p>{$url}</p>";

        $url = rtrim($url, '/');
        $url = explode('/', $url);
        print_r($url);

        $controller_name = $url[0];

        $archivo_controller = "controllers/{$controller_name}.php";

        if(file_exists($archivo_controller)) {

            require_once $archivo_controller;
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