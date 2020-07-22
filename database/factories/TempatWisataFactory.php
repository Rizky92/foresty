<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TempatWisata;
use Faker\Generator as Faker;

$factory->define(TempatWisata::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'deskripsi' => $faker->word,
        'img_path' => $faker->word,
        'slug' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
