<?php

namespace App\Controllers;

use App\Models\Jugador;

/**
 *
 */
class JugadorController
{

    function __construct()
    {
        // echo "En JugadorController";
    }

    public function index()
    {
        //completar
        $jugadores = Jugador::all();
        require "app/views/jugador/index.php";
    }

    public function create()
    {
        require "app/views/jugador/create.php";
    }

    public function edit($arguments)
    {
        //Completar
        $id = (int) $arguments[0];
        $jugador = Jugador::find($id);
        require "app/views/jugador/edit.php";
    }
    public function update()
    {
        $id = $_REQUEST['id'];
        $jugador = Jugador::find($id);
        $jugador->nombre = $_REQUEST['nombre'];
        $jugador->puesto = $_REQUEST['puesto'];
        $jugador->nacimiento = $_REQUEST['nacimiento'];
        $nr_F = count($_FILES["fichero"]["name"]);
        for ($i = 0; $i < $nr_F; $i++) {
            // hay que crear el directorio
            $res = move_uploaded_file(
                $_FILES["fichero"]["tmp_name"][$i],
                "fotos/" . $_FILES["fichero"]["name"][$i]
            );
        }
        $jugador->save();
        header('Location:/jugador');
    }

    public function store()
    {
        //Completar
        $jugador = new Jugador();
        $jugador->nombre = $_REQUEST['nombre'];
        $jugador->puesto = $_REQUEST['puesto'];
        $jugador->nacimiento = $_REQUEST['nacimiento'];
        $nr_F = count($_FILES["fichero"]["name"]);
        for ($i = 0; $i < $nr_F; $i++) {
            // hay que crear el directorio
            $res = move_uploaded_file(
                $_FILES["fichero"]["tmp_name"][$i],
                "fotos/" . $_FILES["fichero"]["name"][$i]
            );
        }
        $jugador->insert();
        header('Location: /jugador');
    }

    public function titular($arg)
    {
        //Completar
        header('Location: /jugador');
    }
    public function titulares()
    {
        //completar
        require "app/views/jugador/titulares.php";
    }
    public function quitar($arg)
    {
        //Completar
        $id = (int) $arg[0];
        $jugador = Jugador::find(($id));
        $jugador->delete();
        header('Location: /jugador/titulares');
    }
}
