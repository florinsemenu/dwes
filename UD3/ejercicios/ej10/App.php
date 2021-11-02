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
        setcookie('colores', $_GET['color'], time() + 3600);
        if (isset($_COOKIE['colores'])) {
            $color = $_COOKIE['colores'];
        }
        include('views/home.php');
    }

    /*public function colores()
    {
        echo '<a href="?cambio&color=red">Rojo</a>';
        echo '<a href="?cambio&color=green">Verde</a>';
        echo '<a href="?cambio&color=blue">Azul</a>';
        include('views/home.php');
    }*/

    public function cambio()
    {
        $color = $_GET['color'];
        setcookie('colores', $color, time() + 3600);
        header('location:index.php?method=home');
    }
}
