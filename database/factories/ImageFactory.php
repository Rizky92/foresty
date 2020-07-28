<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'judul' => $faker->sentence,
        'deskripsi' => $faker->paragraph(8),
        'imageable_type' => $faker->randomElement(array(
            App\Models\Berita::class,
            App\Models\Fauna::class,
            App\Models\Flora::class,
            App\Models\Herbarium::class,
            App\Models\Post::class,
            App\Models\TempatWisata::class
        )),
        'imageable_id' => $faker->randomElement(array(
            App\Models\Berita::all()->random()->id,
            App\Models\Fauna::all()->random()->id,
            App\Models\Flora::all()->random()->id,
            App\Models\Herbarium::all()->random()->id,
            App\Models\TempatWisata::all()->random()->id
        )),
        'img_path' => $faker->image(public_path('assets/frontend/images/faker')),
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
