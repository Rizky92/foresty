<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Fauna;
use Faker\Generator as Faker;

$factory->define(Fauna::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'latin' => $faker->word,
        'deskripsi' => $faker->word,
        'habitat' => $faker->word,
        'lokasi' => $faker->word,
        'img_path' => $faker->word,
        'slug' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
