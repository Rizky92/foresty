<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TempatWisata;
use Faker\Generator as Faker;

$factory->define(TempatWisata::class, function (Faker $faker) {

    return [
        'nama' => $faker->sentence(),
        'deskripsi' => $faker->paragraph(8),
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
