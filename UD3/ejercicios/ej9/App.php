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
        try {
            $this->$method();
        } catch (\Throwable $th) {
            if (method_exists($this, $method)) {
                header("HTTP/1.0 500 Internal Server Error");
                return http_response_code(500);
                echo "Error en el servidor";
            } else {
                header("HTTP/1.0 404 Not Found");
                echo "No encontrado";
            }
        } finally {
            echo "<pre>";
            print_r($th);
        }
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
        setcookie("deseos", time() - 1);
        include('views/login.php');
        echo "Has cerrado sesión.";
    }

    public function new()
    {
        $deseos = [$_POST['wish']];
        setcookie("deseos", serialize($deseos), time() + 3600);
        header('location:index.php?method=home');
    }

    public function empty()
    {
        setcookie("deseos", time() - 1);
        header('location:index.php?method=home');
    }
}
