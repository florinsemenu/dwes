<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function prueba()
    {
        return "Esto es prueba en test SIN parametro";
    }
    public function prueba2($parametro)
    {
        return "$parametro esto es prueba en test CON parametro";
    }
}
