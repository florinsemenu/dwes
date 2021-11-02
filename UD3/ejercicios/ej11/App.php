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
            header("Location:bienvenido.html");
            setcookie('user', $_POST['user'], time() + 3600 * 24);
            setcookie('password', $_POST['password'], time() + 3600 * 24);
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
        setcookie('user', $_POST['user'], time() - 1);
        setcookie('password', $_POST['password'], time() - 1);
        setcookie('deseos', '',  1);
        include('views/login.php');
        echo "Has cerrado sesión.";
    }

    public function new()
    {
        //declaro el array
        $deseos = array();
        //si la cookie existe, deserializo la cookie, añado el post
        //y luego lo guardo en la cookie
        if (isset($_COOKIE['deseos'])) {
            $deseos = unserialize($_COOKIE['deseos']);
            $deseos[] = $_POST['wish'];
            setcookie('deseos', serialize($deseos), time() + 3600);
        }
        //si no hay cookie, guardo el post en el array deseos y guardo la cookie
        else {
            $deseos[] = $_POST['wish'];
            setcookie('deseos', serialize($deseos), time() + 3600);
        }
        header('location:index.php?method=home');
    }

    public function delete()
    {
        //si la cookie existe
        if (isset($_COOKIE['deseos'])) {
            //desserializo la cookie
            $deseos = unserialize($_COOKIE['deseos']);
        } else {
            //si no, creo el array vacío
            $deseos = [];
        }
        //conisgo $nr del deseo y digo que borre ese nr del array deseos
        $id = $_GET['nr'];
        unset($deseos[$id]);
        //vuelvo a guardar la cookie con los cambios hechos
        setcookie('deseos', serialize($deseos), time() + 60 * 60 * 2);
        header('Location: index.php?method=home');
    }

    public function empty()
    {
        setcookie('deseos', '',  1);
        header('location:index.php?method=home');
    }
}
