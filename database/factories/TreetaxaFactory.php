<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Treetaxa;
use Faker\Generator as Faker;

$factory->define(Treetaxa::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
