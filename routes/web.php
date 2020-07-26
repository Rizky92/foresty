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

// public routes
// butuh clean routing
// https://stackoverflow.com/questions/36203020/laravel-single-route-point-to-different-controller-depending-on-slugs
// https://laracasts.com/discuss/channels/laravel/slug-with-multiple-endpoints

// Universal search?
// Route::get('/cari/{cari}', 'PostController@cari')->name('public.cari');

Route::get('/', 'PostController@beranda')->name('public.home');

Route::get('/profil', 'PostController@profil')->name('public.profil');

Route::get('/flora', 'FloraController@publicIndex')->name('public.flora');
Route::get('/flora/{slug}', 'FloraController@publicDetail')->name('public.flora.detail');
Route::get('/flora/cari/{cari}', 'FloraController@publicSearch')->name('public.flora.search');

Route::get('/herbarium', 'HerbariumController@publicIndex')->name('public.herbarium');
Route::get('/herbarium/{slug}', 'HerbariumController@publicDetail')->name('public.herbarium.detail');
Route::get('/herbarium/cari/{cari}', 'HerbariumController@publicSearch')->name('public.herbarium.search');

Route::get('/berita', 'BeritaController@publicIndex')->name('public.berita');
Route::get('/berita/{slug}', 'BeritaController@publicDetail')->name('public.berita.detail');

Route::get('/galeri/{post?}', 'GalleryController@publicIndex')->name('public.gallery');

Route::get('/fauna', 'FaunaController@publicIndex')->name('public.fauna');

Route::get('/tempat_wisata', 'TempatWisataController@publicIndex')->name('public.wisata');

// DETAIL?
// Route::get('/tempat_wisata/{slug}', 'TempatWisataController@publicDetail')->name('public.wisata.detail');

// backend

Auth::routes(['verify' => false]);

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard'], function () {
    Route::resource('countries', 'CountryController', ["as" => 'dashboard']);
    Route::resource('families', 'FamilyController', ["as" => 'dashboard']);
    Route::resource('gazetteers', 'GazetteerController', ["as" => 'dashboard']);
    Route::resource('majoreAreas', 'MajoreAreaController', ["as" => 'dashboard']);
    Route::resource('minoreAreas', 'MinoreAreaController', ["as" => 'dashboard']);
    Route::resource('treetaxas', 'TreetaxaController', ["as" => 'dashboard']);
    Route::resource('floras', 'FloraController', ["as" => 'dashboard']);
    Route::resource('faunas', 'FaunaController', ["as" => 'dashboard']);
    Route::resource('herbaria', 'HerbariumController', ["as" => 'dashboard']);
    Route::resource('tempatWisatas', 'TempatWisataController', ["as" => 'dashboard']);
    Route::resource('posts', 'PostController', ["as" => 'dashboard']);
    Route::resource('galleries', 'GalleryController', ["as" => 'dashboard']);
    Route::resource('beritas', 'BeritaController', ["as" => 'dashboard']);
});


