<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\carousels;
use Faker\Generator as Faker;

$factory->define(carousels::class, function (Faker $faker) {

    return [
        'judul' => $faker->word,
        'subjudul' => $faker->word,
        'url' => $faker->word,
        'img_path' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
