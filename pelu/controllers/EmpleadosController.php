<?php
namespace Controllers;
class EmpleadosController
{
    function __construct()
    {
        //echo "En Empleados Controller;
    }
    public function alta()
    {
        require "views/altaEmpleado.php";
    }
    public function lista()
    {
        
        require "views/empleados.php";
    }

    public function new()
    {
        session_start();
        //declarar el array
        $empleados = array();
        if (isset($_SESSION['empleados'])) {
            $empleados = $_SESSION['empleados'];
            $empleados[] = $_POST['nombre'];
            $empleados[] = $_POST['apellido'];
            $empleados[] = $_POST['telefono'];
            $empleados[] = $_POST['email'];
            $_SESSION['empleados'] = $empleados;
        } else {
            $empleados = $_POST['empleado'];
            $_SESSION['empleados'] = $empleados;
        }
    }
    public function delete()
    {
        session_start();
        if (isset($_SESSION['empleados'])) {
            $empleados = $_SESSION['empleados'];
        } else {
            $empleados = [];
        }
        $id = $_GET['id'];
        unset($empleados[$id]);
        $_SESSION['empleados'] = $empleados;
        header(' Location:index.php?method=home');
    }
}
