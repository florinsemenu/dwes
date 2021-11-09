<?php
class EmpleadosController
{
    function __construct()
    {
        //echo "En Empleados Controller;
    }
    public function empleados()
    {
        require('app/controllers/EmpleadoController.php');
    }
}
