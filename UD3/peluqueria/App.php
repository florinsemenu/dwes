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
    public function new()
    {
        //declarar el array
        $servicios = array();
        session_start();
        if (isset($_SESSION['servicios'])) {
            $servicios[] = $_POST['servicio'];
            $_SESSION['servicios'] = $servicios;
        }
    }
}
