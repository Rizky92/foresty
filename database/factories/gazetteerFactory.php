<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Gazetteer;
use Faker\Generator as Faker;

$factory->define(Gazetteer::class, function (Faker $faker) {

    return [
        'nama' => $faker->city,
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
