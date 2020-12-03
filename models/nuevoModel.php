<?php

class NuevoModel extends Model {
    function __construct() {
        parent::__construct();
    }

    function insert($datos) {

        try {
            $query = $this->db->connect()->prepare("INSERT INTO ALUMNOS(MATRICULA, NOMBRE, APELLIDO) VALUES(:matricula, :nombre, :apellido)");
            $query->execute(["matricula" => $datos["matricula"], "nombre" => $datos["nombre"], "apellido" => $datos["apellido"]]);
            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            return false;
        }

    }
}