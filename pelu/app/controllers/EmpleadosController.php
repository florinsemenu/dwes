<?php

namespace App\Controllers;

require_once "app/models/Empleado.php";

use App\Models\Empleado;

class EmpleadosController
{

    //metodo que muestra todos los empleados
    public function index()
    {
        //me he quedado aquí, no le gusta employees
        //buscar datos
        $employees = Empleado::all();
        //pasar a la vista
        require('app/views/empleados/index.php');
    }
    //metodo para crear nuevo empleado
    public function create()
    {
        require 'app/views/empleados/create.php';
    }
    //metodo que muestra los detalles del empleado
    public function show($args)
    {
        list($id) = $args;
        $employee = Empleado::find($id);
        require('app/views/empleados/show.php');
    }

    //metodo que añade un nuevo empleado
    public function store()
    {
        $employee = new Empleado();
        $employee->name = $_REQUEST['name'];
        $employee->surname = $_REQUEST['surname'];
        $employee->email = $_REQUEST['email'];
        $employee->details = $_REQUEST['details'];
        $employee->birthdate = $_REQUEST['birthdate'];
        $employee->password = $_REQUEST['password'];
        $employee->active = $_REQUEST['active'];
        $employee->admin = $_REQUEST['admin'];
        $employee->insert();
        header('Location:/empleados/index');
    }
    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $employee = Empleado::find($id);
        require 'app/views/empleados/edit.php';
    }
    //metodo que actualiza un empleado
    public function update()
    {
        $id = $_REQUEST['id'];
        $employee = Empleado::find($id);
        $employee->name = $_REQUEST['name'];
        $employee->surname = $_REQUEST['surname'];
        $employee->email = $_REQUEST['email'];
        $employee->details = $_REQUEST['details'];
        $employee->birthdate = $_REQUEST['birthdate'];
        $employee->password = $_REQUEST['password'];
        $employee->active = $_REQUEST['active'];
        $employee->admin = $_REQUEST['admin'];
        //tengo que indicar que lo quiero guardar
        $employee->save();
        //y después tengo que redireccionar
        header('Location:/empleados/index');
    }

    //metodo que borra un empleado
    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $employee = Empleado::find($id);
        $employee->delete();
        header('Location:/empleados/index');
    }
}
