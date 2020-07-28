<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {

    return [
        'nama' => $faker->country,
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
