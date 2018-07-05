<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jediController extends Controller
{
    public function lista(Request $request)
    {

      $jedis=[
          'Yoda',
          'Obi wan',
          'Quin Gon Yin'


      ];

      $view= view('star-wars.jedis.lista');
      $view-> with('jedis', $jedis);
      return view;




    }
}
