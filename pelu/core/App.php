<?php
/*1 Crear Controlador Frontal y redireccionar
        controller->App.php(recibe peticiones tipo index.php?name=empleados&method=index)
        controllers -> EmpleadosController.php
            index()->
*/
namespace Core;
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
        //en el primer parametro recojo el nombre del controller
        $arguments = explode('/', trim($url, '/'));
        $controllerName = array_shift($arguments);
        $controllerName = ucwords($controllerName) . "Controller";
        
        //y aquí recojo el nombre del método
        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "home";
        }

        // echo "$controllerName -> $method";
        //accedo al archivo del controlador
        $file = "app/controllers/$controllerName" . ".php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            header("HTTP/1.0 404 Not Found");
            die();
        }
        $controllerName = '\\App\\Controllers\\' . $controllerName;
       

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
