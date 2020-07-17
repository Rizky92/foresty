<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Herbarium;
use Faker\Generator as Faker;

$factory->define(Herbarium::class, function (Faker $faker) {

    return [
        'latin' => $faker->word,
        'collector' => $faker->word,
        'number' => $faker->word,
        'prefix' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
