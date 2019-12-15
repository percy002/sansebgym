<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Entities\PagosMembresia;


$factory->define(PagosMembresia::class, function (Faker $faker) {
    return [
        //
        'idusuario' => 1,
        'idSocio' => $faker->numberBetween($min = 1, $max = 50), // 8567
        'idtipoMembresia' => $faker->randomElement($array = array ('1','2','3')), // 'b'
        'cantidad' => $faker->randomDigitNotNull,
        'precioTotal' => $faker->randomElement($array = array (50,150,200)), // 'b'
        'fechaInicio' => $faker->dateTimeBetween('-4 month', '+0 days'),
        'fechaFin' => $faker->dateTimeBetween('+1 month', '+6 month'),
    ];
});
