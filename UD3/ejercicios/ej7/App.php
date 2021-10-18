<?php

class App
{

    //crear un constructor
    public function __construct($name = "Aplicacion PHP")
    {
        //declarar variables de la clase e inicializarlas
        $this->name = $name;
        $this->numeros = array();
    }
    //creo método run, que se va a encargar de ejecutar
    //los métodos que yo le pase en la variable method
    public function run()
    {
        //si $get method está asignado(tienen valor) el metodo
        //que llamo es el que tiene $get
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        }
        //si no se ha asignado nada(que será la primera vez que
        //abro la página) por defecto metodo principal que veo es index
        else {
            $method = 'index';
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
    public function index()
    {
        //incluyo la vista index.php
        include('views/index.php');
    }
    public function fibonacci()
    {
        $numero1 = 0;
        $numero2 = 1;
        echo "$numero1<br>";
        echo "$numero2<br>";
        for ($i = 2; $i < 10; $i++) {
            $fibonacci = $numero1 + $numero2;
            //te has quedad en cómo guardar fibonacci en el array
            //antes hacie un echo de fibonacci y lo veía
            $this->numeros = $fibonacci;
            $numero1 = $numero2;
            $numero2 = $fibonacci;
        };
        include('views/fibonacci.php');
    }
}
