<?php
/*1 Crear Controlador Frontal y redireccionar
        controller->App.php(recibe peticiones tipo index.php?name=empleados&method=index)
        controllers -> EmpleadosController.php
            index()->
*/
class App
{

    public function run()
    {
        //obtener nombre controlador
        $controllerName = $_GET['controller'];
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
