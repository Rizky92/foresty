<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    return [
        'judul' => $faker->sentence(),
        'deskripsi' => $faker->paragraph(8),
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
