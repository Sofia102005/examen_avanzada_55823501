<?php
 require 'db.php';
 use
    
 class ControladorEmpleados
 {

    public function getAllEmpleados()
    {
        return Ingreso::all();
    }

 }