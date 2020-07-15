<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\gazetteer;
use Faker\Generator as Faker;

$factory->define(gazetteer::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
