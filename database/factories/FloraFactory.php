<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Flora;
use Faker\Generator as Faker;

$factory->define(Flora::class, function (Faker $faker) {

    return [
        'nama' => $faker->sentence,
        'deskripsi' => $faker->paragraph(8),
        'khasiat' => $faker->words(6, true),
        'musim' => $faker->word,
        'habitat' => $faker->state,
        'lokasi' => $faker->city,
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
