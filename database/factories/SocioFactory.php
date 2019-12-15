<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Entities\Socio;


$factory->define(Socio::class, function (Faker $faker) {
    return [
        //
        'dni' => $faker->unique()->randomNumber($nbDigits = 8, $strict = true), // 79907610,
        'nombres' => $faker->firstName($gender = null),
        'apellidos' => $faker->lastName,
        'celular' => $faker->unique()->randomNumber($nbDigits = 9, $strict = true), // 79907610,,
        'correo' => $faker->unique()->freeEmail,
        'genero' => $faker->randomElement($array = array ('masculino','femenino')), // 'b',
        
    ];
});
