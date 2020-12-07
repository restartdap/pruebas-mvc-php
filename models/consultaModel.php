<?php

require_once "models/alumno.php";

class ConsultaModel extends Model {
    function __construct() {
        parent::__construct();
    }
  
    public function get() {
        $items = [];

        try {
            $query = $this->db->connect()->query("SELECT * FROM alumnos");

            while($row = $query->fetch()) {
                $item = new Alumno();
                $item->matricula = $row["matricula"];
                $item->nombre = $row["nombre"];
                $item->apellido = $row["apellido"];

                array_push($items, $item);
            }
        } 
        catch (PDOException $e) {
            return [];
        }
    }
}