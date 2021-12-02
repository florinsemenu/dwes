<?php

namespace App\Controllers;

require_once "app/models/Servicio.php";

use App\Models\Servicio;

class ServiciosController
{

    //metodo que muestra todos los servicios
    public function index()
    {
        //buscar datos
        $services = Servicio::all();
        //pasar a la vista
        require('app/views/servicios/index.php');
    }
    public function create()
    {
        require 'app/views/servicios/create.php';
    }

    //metodo que muestra los detalles del servicio
    public function show($args)
    {
        list($id) = $args;
        $service = Servicio::find($id);
        require('app/views/servicios/show.php');
    }

    //metodo que añade un nuevo servicio
    public function store()
    {
        $service = new Servicio();
        $service->name = $_REQUEST['name'];
        $service->gender = $_REQUEST['gender'];
        $service->detail = $_REQUEST['detail'];
        $service->price = $_REQUEST['price'];
        $service->time = $_REQUEST['time'];
        $service->insert();
        header('Location:/servicios/index');
    }
public function edit($arguments)
{
    $id = (int) $arguments[0];
    $service = Servicio::find($id);
    require 'app/views/servicios/edit.php';
}
    //metodo que actualiza un servicio
    public function update()
    {
        $id = $_REQUEST['id'];
        $service = Servicio::find($id);
        $service->name = $_REQUEST['name'];
        $service->gender = $_REQUEST['gender'];
        $service->detail = $_REQUEST['detail'];
        $service->price = $_REQUEST['price'];
        $service->time = $_REQUEST['time'];
        //tengo que indicar que lo quiero guardar
        $service->save();
        //y después tengo que redireccionar
        header('Location:/servicios/index');
    }

    //metodo que borra un servicio
    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $service = Servicio::find($id);
        $service->delete();
        header('Location:/servicios/index');
    }
}
