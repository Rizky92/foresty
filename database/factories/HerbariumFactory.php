<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Herbarium;
use Faker\Generator as Faker;

$factory->define(Herbarium::class, function (Faker $faker) {

    return [
        'latin' => $faker->word,
        'collector' => $faker->word,
        'number' => $faker->randomDigitNotNull,
        'prefix' => $faker->word,
        'img_path' => $faker->word,
        'country_id' => $faker->randomDigitNotNull,
        'family_id' => $faker->randomDigitNotNull,
        'gazetteer_id' => $faker->randomDigitNotNull,
        'major_area_id' => $faker->randomDigitNotNull,
        'minor_area_id' => $faker->randomDigitNotNull,
        'treetexa_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
