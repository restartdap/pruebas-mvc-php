<?php

class Main extends Controller {

    function __construct() {   
        parent::__construct();
    }

    function render() {
        $this->view->render("main/index");
    }

    function saludo() {
        echo "<p>Ejecutaste el metodo Saludo</p>";
    }
}