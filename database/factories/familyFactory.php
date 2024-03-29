<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Family;
use Faker\Generator as Faker;

$factory->define(Family::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
