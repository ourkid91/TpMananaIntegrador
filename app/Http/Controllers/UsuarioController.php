<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Usuario;

class UsuarioController extends Controller
{
  public function listado(Request $request)
  {

    $usuario= Usuario::all();

    $view = view('usuario/usuario');

    $view->with('usuario' ,$usuario);

    return $view;
  }

  public function agregar (Request $request){

      $usuario= Usuario::all();

      $view = view('usuario/usuario') ;

      $view->with('usuario' ,$usuario); //comparar el usuario llamado con el de arriba

      return $view;

      }


}
