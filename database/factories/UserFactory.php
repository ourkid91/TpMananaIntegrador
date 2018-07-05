<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->nombre,
        'apellido' => $faker->apellido,
        'usuario' => $faker->usuario,
        'email' => $faker->unique()->safeEmail,
        'pass' => crypt (str: 'password'),
        'nacimiento'=>$faker-> dateTime();
        'foto_perfil'=>$faker->url;
      
    ];
});
