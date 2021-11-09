<?php
class App
{
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
        }
        $this->$method();
    }

    public function home()
    {
        include('views/home.php');
    }
    public function newEmpleado()
    {
        //declarar el array
        $empleados = array();
        session_start();
        if (isset($_SESSION['empleados'])) {
            $empleados[] = $_POST['empleado'];
            $_SESSION['empleados'] = $empleados;
        } else {
            $empleados = $_POST['empleado'];
            $_SESSION['empleados'] = $empleados;
        }
    }
    public function deleteEmpleado()
    {
        if (isset($_SESSION['empleados'])) {
            $empleados = $_SESSION['deseos'];
        } else {
            $empleados = [];
        }
        $id = $_GET['id'];
        unset($empleados[$id]);
        $_SESSION['empleados'] = $empleados;
        header(' Location:index.php?method=home');
    }
}
