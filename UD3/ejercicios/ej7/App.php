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
        $fibonacci = 0;
        for ($i = 2; $fibonacci < 1000000; $i++) {
            $fibonacci = $numero1 + $numero2;
            //te has quedad en cómo guardar fibonacci en el array
            //antes hacie un echo de fibonacci y lo veía
            $this->numeros[] = $fibonacci;
            $numero1 = $numero2;
            $numero2 = $fibonacci;
        };
        include('views/fibonacci.php');
    }

    public function potencia2()
    {
        for ($i = 1; $i <= 24; $i++) {
            $this->numeros[] = pow(2, $i);
        };
        include('views/potencia2.php');
    }

    public function factorial()
    {
        $factorial = 1;
        for ($i = 1; $factorial <= 1000000; $i++) {
            $factorial = $factorial * $i;
            $this->numeros[] = $factorial;
        };
        include('views/factorial.php');
    }

    public function primo()
    {
        //calcular numeros primos del 1 al 10000
        //desde 1 hasta que i sea menor o igual que 10000
        for ($i = 1; $i <= 10000; $i++) {
            //declaro variable como true
            //esto hace que todo número que valga i, sea true
            $esPrimo = true;
            //creo segundo bucle
            //con j= 2 hasta que j sea menor o igual que i divido 2
            //con este bucle no sé lo que hago, pero funciona
            for ($j = 2; $j <= $i / 2; $j++) {
                //si el resto de i entre j es 0, i ya no es primo y rompo el bucle.
                if ($i % $j == 0) {
                    $esPrimo = false;
                    break;
                }
            }
            //cualquier true lo meto en el array
            if ($esPrimo == true) {
                $this->numeros[] = $i;
            }
        }
        include('views/primo.php');
    }
}
