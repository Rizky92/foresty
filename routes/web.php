<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function() {
    for ($i = 1; $i <= 50; $i++) {
        $herbs = App\Models\Berita::find($i);
        $herb = $herbs->images()->first();
        var_dump($herb);
        if (!empty($herb->img_path)) {
            echo 'herb name: '. $herbs->latin .', id: '. $herbs->id .' img path: '. $herb->img_path .'<br>';
        }
    }
});

// Route::get('/berita/test', 'BeritaController@import')->name('berita.import');
// Route::post('/berita/test', 'BeritaController@upload')->name('berita.upload');

Route::get('/cari/{cari}', 'PostController@cari')->name('public.cari');

Route::get('/', 'PostController@beranda')->name('public.home');

Route::get('/profil', 'PostController@profil')->name('public.profil');

Route::get('/flora', 'FloraController@publicIndex')->name('public.flora');
Route::get('/flora/galeri', 'FloraController@publicImages')->name('public.flora.gallery');
Route::get('/flora/galeri/{slug}', 'FloraController@findPublicImages')->name('public.flora.images.find');

Route::get('/fauna', 'FaunaController@publicIndex')->name('public.fauna');
Route::get('/fauna/galeri', 'FaunaController@publicImages')->name('public.fauna.gallery');
Route::get('/fauna/galeri/{slug}', 'FaunaController@findPublicImages')->name('public.fauna.images.find');

Route::get('/herbarium', 'HerbariumController@publicIndex')->name('public.herbarium');
Route::get('/herbarium/galeri', 'HerbariumController@publicImages')->name('public.herbarium.gallery');
Route::get('/herbarium/detail/{slug}', 'HerbariumController@publicDetail')->name('public.herbarium.detail');
Route::get('/herbarium/detail/{slug}/galeri', 'HerbariumController@publicDetailImages')->name('public.herbarium.detail.galeri');

Route::get('/tempat_wisata', 'TempatWisataController@publicIndex')->name('public.wisata');
Route::get('/tempat_wisata/galeri', 'TempatWisataController@publicImages')->name('public.wisata.gallery');
Route::get('/tempat_wisata/galeri/{slug}', 'TempatWisataController@findPublicImages')->name('public.wisata.images.find');

Route::get('/berita', 'BeritaController@publicIndex')->name('public.berita');
Route::get('/berita/galeri', 'BeritaController@publicImages')->name('public.berita.gallery');
Route::get('/berita/baca/{slug}', 'BeritaController@readArticle')->name('public.berita.detail');
Route::get('/berita/baca/{slug}/galeri', 'BeritaController@articleImages')->name('public.berita.detail.gallery');

Route::get('/galeri', 'ImageController@publicIndex')->name('public.galeri');

// backend

Auth::routes(['verify' => false]);

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard'], function () {
    Route::resource('beritas', 'BeritaController', ["as" => 'dashboard']);
    Route::resource('countries', 'CountryController', ["as" => 'dashboard']);
    Route::resource('families', 'FamilyController', ["as" => 'dashboard']);
    Route::resource('faunas', 'FaunaController', ["as" => 'dashboard']);
    Route::resource('floras', 'FloraController', ["as" => 'dashboard']);
    Route::resource('gazetteers', 'GazetteerController', ["as" => 'dashboard']);
    Route::resource('herbaria', 'HerbariumController', ["as" => 'dashboard']);
    Route::resource('images', 'ImageController', ["as" => 'dashboard']);
    Route::resource('majoreAreas', 'MajoreAreaController', ["as" => 'dashboard']);
    Route::resource('minoreAreas', 'MinoreAreaController', ["as" => 'dashboard']);
    Route::resource('posts', 'PostController', ["as" => 'dashboard']);
    Route::resource('tempatWisatas', 'TempatWisataController', ["as" => 'dashboard']);
    Route::resource('treetaxas', 'TreetaxaController', ["as" => 'dashboard']);
});
