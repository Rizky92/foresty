<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Berita;
use Faker\Generator as Faker;

$factory->define(Berita::class, function (Faker $faker) {

    return [
        'judul' => $faker->word,
        'deskripsi' => $faker->word,
        'slug' => $faker->word,
        'img_path' => $faker->word,
        'img_caption' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
