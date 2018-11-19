<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\User;


class UsuarioController extends Controller
{

    public function index()
    {
      
    }

   
    public function create()
    {
        return view('ag.CU5.create');
    }


    public function storeUsuario($datos)
    {
   
    $usuario = User::_guardarUsuario($datos);
    return $usuario;

    }
   
    public function validateUsuario($datos)
    {
        $usuario = User::_validarUsuario($datos);
        return $usuario;
    }

  
    public function edit($id)
    {
        
    }
    
    public function destroy($id)
    {
        //
    }

   
}
