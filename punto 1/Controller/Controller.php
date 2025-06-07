<?php
 require 'db.php';
     
 class ControladorEmpleados
 {

    public function getAllEmpleados()
    {
        return empleados::all();
    }

 }