<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;

class EquipoController extends Controller
{
    public function listEquipos()
    {
   
    $equipos = Equipo::_listarEquipos();
    return $equipos;

    }

    public function listEquipo($id)
    {
   
    $equipo = Equipo::_listarEquipo($id);
    return $equipo;

    }

    public function storeEquipo($datos)
    {
   
    $equipo = Equipo::_guardarEquipo($datos);
    return $equipo;

    }
}
