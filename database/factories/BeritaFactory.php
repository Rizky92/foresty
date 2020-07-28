<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Berita;
use Faker\Generator as Faker;

$factory->define(Berita::class, function (Faker $faker) {

    return [
        'judul' => $faker->sentence(),
        'deskripsi' => $faker->paragraph(8),
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
