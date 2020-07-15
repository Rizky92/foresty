<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\koleksi_herbarium;
use Faker\Generator as Faker;

$factory->define(koleksi_herbarium::class, function (Faker $faker) {

    return [
        'nama_latin' => $faker->word,
        'collector' => $faker->word,
        'number' => $faker->randomDigitNotNull,
        'prefix' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
