<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Herbarium;
use Faker\Generator as Faker;

$factory->define(Herbarium::class, function (Faker $faker) {

    return [
        'latin' => $faker->word,
        'collector' => $faker->word,
        'add_coll' => $faker->word,
        'collected_date' => $faker->word,
        'number' => $faker->randomDigitNotNull,
        'prefix' => $faker->word,
        'locality_note' => $faker->word,
        'img_path' => $faker->word,
        'country_id' => $faker->randomDigitNotNull,
        'family_id' => $faker->randomDigitNotNull,
        'gazetteer_id' => $faker->randomDigitNotNull,
        'majore_area_id' => $faker->randomDigitNotNull,
        'minore_area_id' => $faker->randomDigitNotNull,
        'treetaxa_id' => $faker->randomDigitNotNull,
        'flora_id' => $faker->randomDigitNotNull,
        'slug' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
