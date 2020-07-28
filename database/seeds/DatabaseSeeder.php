<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\Models\Family::class, 50)->create();
        factory(App\Models\Treetaxa::class, 50)->create();
        factory(App\Models\Country::class, 50)->create();
        factory(App\Models\MajoreArea::class, 50)->create();
        factory(App\Models\MinoreArea::class, 50)->create();
        factory(App\Models\Gazetteer::class, 50)->create();

        factory(App\Models\Berita::class, 50)->create();
        factory(App\Models\Fauna::class, 50)->create();
        factory(App\Models\TempatWisata::class, 50)->create();

        factory(App\Models\Flora::class, 50)->create();
        factory(App\Models\Herbarium::class, 50)->create();
        factory(App\Models\Image::class, 250)->create();
    }
}
