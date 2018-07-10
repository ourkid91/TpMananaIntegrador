<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */



    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    public function showRegistrationForm(){
        return view('resgistrarte');


    }
    protected function validator(array $data)
    {

      
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'usuario' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'fecha' => 'date',
            'avatar' => 'image',
            'password' => 'required|string|min:6|confirmed',
        ],
      [ 'name.required'=> 'El nombre es obligatorio',
      'apellido.required'=> 'El apellido es obligatorio',
      'usuario.required'=> 'El usuario es obligatorio',
      'usuario.unique'=> 'Este usuario ya esta registrado',
      'email.required'=> 'El email es obligatorio',
      'email.unique'=> 'El email ya esta registrado',
      'fecha.date'=> 'La fecha es necesaria',
      'avatar.image'=> 'Ingresa una imagen valida',
      'password.required'=> 'La contraseña es incorrecta',



    ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Modelo\Usuario
     */
    protected function create(array $data, $file)
    {

      $path = '';
      if( $data['avatar'] ){
        $imagenes = "";
        $path = $data->file("avatar")->store($imagenes, 'public');

      }
        return User::create([
            'name' => $data['name'],
            'apellido' => $data['apellido'],
            'usuario' => $data['usuario'],
            'nacimientio' => $data['fecha'],
            'foto_perfil' => $path,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
