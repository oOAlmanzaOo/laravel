<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Entities\model_ejemplo_1::class, function (Faker $faker) {
    return [

      'nombre'   => $faker->name,
      'apellido' => Str::random(10),
      'correo'   => $faker->unique()->safeEmail

    ];
});
