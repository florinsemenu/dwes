<?php
/*1 Crear Controlador Frontal y redireccionar
        controller->App.php(recibe peticiones tipo index.php?name=empleados&method=index)
        controllers -> EmpleadosController.php
            index()->
*/

class App
{
    function __construct()
    {
        //si hay url y no está vacía, voy a la url indicada.
        //si no, por defecto voy a home.
        if (isset($_GET['url']) and !empty($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }

        //la url se usa de la siguiente manera
        // controlador/metodo/argumentos

        //hago un split por las /
        $arguments = explode('/', trim($url, '/'));
        $controllerName = array_shift($arguments);

        //obtener nombre controlador
        if (isset($_GET['controller'])) {
            $controllerName = $_GET['controller'];
        } else {
            $controllerName = 'home';
        }
        $controllerName = ucwords($controllerName) . "Controller";

        //obtener nombre método
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
        }

        //accedo al archivo del controlador
        $file = "controllers/$controllerName" . ".php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            header("HTTP/1.0 404 Not Found");
            die();
        }

        //creo un objeto, llamo al metodo del objeto y le paso los argumentos.
        $controllerObject = new $controllerName;
        if (method_exists($controllerName, $method)) {
            $controllerObject->$method($arguments);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }
    }
}
