<?php
/*classApp{
    function login (){
        ...
        include ('views/login.php');
    }
    functio auth//close(){
        ...
        header('location:index.php?method=home');
    }
    function home(){
        ...
        include ('views/home.php');
    }
    function run{
        //Ejectua METODO
        1ª vez login
    }
    ---------------------------
    Formulario login.php
    <form post action"?method=auth">
} */
class App
{
    //crear metodo run
    public function run()
    {
        //si metodo tiene valor, llamo al método get
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        }
        //si no hay nada asignado, por defecto veré el método index
        else {
            $method = 'login';
        }

        //try catch
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

    /*public function index()
    {
        //incluyo la vista index.php
        include('views/index.php');
    }*/

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
        include('views/login.php');
        echo "Has cerrado sesión.";
    }
}
