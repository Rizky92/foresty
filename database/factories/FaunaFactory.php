<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Fauna;
use Faker\Generator as Faker;

$factory->define(Fauna::class, function (Faker $faker) {

    return [
        'nama' => $faker->sentence,
        'deskripsi' => $faker->paragraph(8),
        'habitat' => $faker->state,
        'lokasi' => $faker->city,
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
