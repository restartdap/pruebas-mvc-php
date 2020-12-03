<?php

class Nuevo extends Controller {

    function __construct() {   
        parent::__construct();
    }

    function render() {
        $this->view->render("nuevo/index");
    }

    function registrarAlumno() {

        $mensaje = "";

        if(count($_POST) == 3) {
            $matricula = $_POST["matricula"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];

            $resultado = $this->model->insert(["matricula" => $matricula, "nombre" => $nombre, "apellido" => $apellido]);

            if($resultado) {
                $mensaje = 1;
            }
            else {
                $mensaje = 2;
            }
        }
        else {
            $mensaje = 3;
        }
        
        $this->view->mensaje = $mensaje;
        $this->render();
    }
}