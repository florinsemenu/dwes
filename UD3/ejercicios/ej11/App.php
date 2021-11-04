<?php
class App
{
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'login';
        }
        $this->$method();
    }

    public function login()
    {
        include('views/login.php');
    }

    public function auth()
    {
        if ($_POST['user'] == "florin" and $_POST['password'] == 'azul') {
            session_start();
            header("Location:bienvenido.html");
            $_SESSION['user'] = $_POST['user'];
            $_SESSION['password'] = $_POST['password'];
            header('location:index.php?method=home');
        } else {
            include('views/login.php');
            echo "Usuario o constraseña incorrecto";
        }
    }

    public function home()
    {
        include('views/home.php');
    }

    public function logout()
    {
        session_start();
        session_destroy();
        include('views/login.php');
        echo "Has cerrado sesión.";
    }

    public function new()
    {
        session_start();
        //declaro el array
        $deseos = array();
        //si la session existe, deserializo la session, añado el post
        //y luego lo guardo en la session
        if (isset($_SESSION['deseos'])) {
            $deseos = $_SESSION['deseos'];
            $deseos[] = $_POST['wish'];
            $_SESSION['deseos'] = $deseos;
        }
        //si no hay session, guardo el post en el array deseos y guardo la session
        else {
            $deseos[] = $_POST['wish'];
            $_SESSION['deseos'] = $deseos;
        }
        header('location:index.php?method=home');
    }

    public function delete()
    {
        session_start();
        //si la session existe
        if (isset($_SESSION['deseos'])) {
            //desserializo la session
            $deseos = $_SESSION['deseos'];
        } else {
            //si no, creo el array vacío
            $deseos = [];
        }
        //conisgo $nr del deseo y digo que borre ese nr del array deseos
        $id = $_GET['nr'];
        unset($deseos[$id]);
        //vuelvo a guardar la session con los cambios hechos
        $_SESSION['deseos'] = $deseos;
        header('Location: index.php?method=home');
    }

    public function empty()
    {
        session_start();
        session_destroy();
        header('location:index.php?method=home');
    }
}
