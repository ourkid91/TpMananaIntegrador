<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $fillable = ['name','apellido','usuario','password','foto_perfil','nacimiento','email'];
}
