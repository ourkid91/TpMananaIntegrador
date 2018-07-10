<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create ('usuarios', function (Blueprint $table){
        $table->increments('id');
        $table->string('name');
        $table->string('apellido');
        $table->string('usuario');
        $table->string('email')->unique();
        $table->string('password');
        $table->dateTime('nacimiento');
        $table->string('foto_perfil')->nullable();
      });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('usuarios');
    }
}
