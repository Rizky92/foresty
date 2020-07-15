<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\major_area;
use Faker\Generator as Faker;

$factory->define(major_area::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
