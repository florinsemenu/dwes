<?php
class App
{
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
            session_start();
            session_destroy();
        }
        $this->$method();
    }

    public function home()
    {
        include('views/home.php');
    }

    public function cambio()
    {
        session_start();
        $color = $_GET['color'];
        $_SESSION['colores'] = $color;
        header('location:index.php?method=home');
    }
}
