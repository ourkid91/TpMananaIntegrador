<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Publicacione;

class PublicacionesController extends Controller
{
  public function lista(Request $request)
  {
      $Publicaciones= Publicacione::all();

      $view = view('usuario/Publicaciones');

      $view->with('Publicaciones' ,$Publicaciones);

      return $view;
    }

    public function index(Request $request)
    {
      $Publicaciones= Publicacione::all();

      $view = view('usuario.publicaciones');
      $view->with('Publicaciones' ,$Publicaciones);
      return $view;
    }

}
