<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MinoreArea;
use Faker\Generator as Faker;

$factory->define(MinoreArea::class, function (Faker $faker) {

    return [
        'nama' => $faker->state,
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
