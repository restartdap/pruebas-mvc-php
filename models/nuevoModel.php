<?php

class NuevoModel extends Model {
    function __construct() {
        parent::__construct();
    }

    function insert() {
        echo "Insertar datos";
    }
}