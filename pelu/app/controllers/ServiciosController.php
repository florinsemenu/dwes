<?php
namespace App\Controllers;
require_once "app/models/Servicio.php";
use App\Models\Servicio;
class ServiciosController{
    public function index()
    {
        //buscar datos
        $services = Servicio::all();
        //pasar a la vista
        require('app/views/servicios.php');
    }

}