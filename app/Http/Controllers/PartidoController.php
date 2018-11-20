<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partido;

class PartidoController extends Controller
{
    public function storePartido($datos)
    {
   
    $partido = Partido::_guardarPartido($datos);
    return $partido;

    }

    public function listPartido($id)
    {
   
    $partido = Partido::_listarPartido($id);
    return $partido;

    }

    public function listPartidos()
    {
   
    $partidos = Partido::_listarPartidos();
    return $partidos;

    }
}
