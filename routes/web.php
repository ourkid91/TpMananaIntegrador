<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('saludar/nombre/{nombre}/apellido/{apellido}', function ($nombre, $apellido) {
    echo "Hola $apellido, $nombre";
});

Route::get('bienvenido', 'InicioController@index');

Route::get('listado/jedis', 'jediController@lista');

Route::get('index', 'indexController@index');

Route::get('usuarios','UsuarioController@listado');

Route::get('miPerfil','PublicacionesController@lista');

Route::get('usuarios/listado', 'PublicacionesController@index');

Route::get('usuarios','UsuarioController@agregar');
