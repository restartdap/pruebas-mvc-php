<?php

class Controller {
    
    function __construct() {
        $this->view = new View();
    }

    function loadModel($model) {
        $url = "models/{$model}Model.php";

        if(file_exists($url)) {
            require $url;

            $model_name = "{$model}Model";
            $this->model = new $model_name();
        }
    }
}