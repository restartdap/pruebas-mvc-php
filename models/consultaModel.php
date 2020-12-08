<?php

require_once "models/alumno.php";

class ConsultaModel extends Model {
    function __construct() {
        parent::__construct();
    }
  
    public function getAll() {
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

            return $items;
        } 
        catch (PDOException $e) {
            return [];
        }
    }

    public function getById($id) {
        $item = new Alumno();
        $query = $this->db->connect()->prepare("SELECT * FROM alumnos WHERE matricula = :matricula");
        
        try {
            $query->execute(["matricula" => $id]);
            while($row = $query->fetch()) {
                $item->matricula = $row["matricula"];
                $item->nombre = $row["nombre"];
                $item->apellido = $row["apellido"];
            }

            return $item;

        }
        catch (PDOException $e) {
            return null;
        }
    }

    public function update($item) {
        $query = $this->db->connect()->prepare("UPDATE alumnos SET nombre = :nombre, apellido = :apellido WHERE matricula = :matricula");
    
        try {
            $query->execute([
                "matricula" => $item->matricula,
                "nombre" => $item->nombre,
                "apellido" => $item->apellido
            ]);

            return true;

        }
        catch (PDOException $e) {
            return false;
        }
    }
}