<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Herbarium;
use Faker\Generator as Faker;

$factory->define(Herbarium::class, function (Faker $faker) {

    return [
        'latin' => $faker->word,
        'collector' => $faker->word,
        'add_coll' => $faker->word,
        'collected_date' => $faker->date('Y-m-d H:i:s'),
        'number' => $faker->randomDigitNotNull,
        'prefix' => $faker->randomLetter,
        'locality_note' => $faker->city,
        'country_id' => App\Models\Country::all()->random()->id,
        'family_id' => App\Models\Family::all()->random()->id,
        'gazetteer_id' => App\Models\Gazetteer::all()->random()->id,
        'majore_area_id' => App\Models\MajoreArea::all()->random()->id,
        'minore_area_id' => App\Models\MinoreArea::all()->random()->id,
        'treetaxa_id' => App\Models\Treetaxa::all()->random()->id,
        'flora_id' => App\Models\Flora::all()->random()->id,
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
