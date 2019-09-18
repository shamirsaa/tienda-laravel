<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ventas;
use Faker\Generator as Faker;

$factory->define(ventas::class, function (Faker $faker) {

    return [
        'clienteId' => $faker->word,
        'vendedorId' => $faker->word,
        'productoId' => $faker->word,
        'cantidad' => $faker->randomDigitNotNull,
        'total' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
