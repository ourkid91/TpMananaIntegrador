<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Publicacione extends Model
{
    public function usuario()
    {
      return $this->belongsTo(Usuario::class, 'id_usuario', 'id');
    }



}
