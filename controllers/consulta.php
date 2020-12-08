<?php

class Consulta extends Controller {

    function __construct() {   
        parent::__construct();
        $this->view->alumnos = [];
    }

    function render() {
        $alumnos = $this->model->getAll();
        $this->view->alumnos = $alumnos;
        $this->view->render("consulta/index");
    }

    function verAlumno($param = null) {
        $id_alumno = $param[0];
        $alumno = $this->model->getById($id_alumno);
        session_start();
        $_SESSION["id_verAlumno"] = $alumno->matricula;
        $this->view->alumno = $alumno;
        $this->view->render("consulta/detalle");
    }

    function actualizarAlumno () {
        session_start();
        $matricula = $_SESSION["id_verAlumno"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];

        unset($_SESSION["id_verAlumno"]);

        if($this->model->update(["matricula" => $matricula, "nombre" => $nombre, "apellido" => $apellido])) {
            $alumno = new Alumno();
            $alumno->matricula = $matricula;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;

            $this->view->alumno = $alumno;
            $this->view->mensaje = 1;
        }
        else {
            $this->view->mensaje = 2;
        }

        $this->view->render("consulta/detalle");
    }

    function eliminarAlumno() {
        
    }
}