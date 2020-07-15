<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tumbuhan;
use Faker\Generator as Faker;

$factory->define(tumbuhan::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'deskripsi' => $faker->word,
        'khasiat' => $faker->word,
        'musim' => $faker->word,
        'habitat' => $faker->word,
        'lokasi' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
