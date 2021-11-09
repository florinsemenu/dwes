<?php
class EmpleadosController
{
    function __construct()
    {
        //echo "En Empleados Controller;
    }
    public function empleados()
    {
        echo "esto es empleados";
        require "views/empleado.php";
    }
}
