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

// public

Route::get('/', function () {
    return view('welcome');
})->name('public.home');

Route::get('/profil', function () {
    return view('public.profil.profil');
});

Route::get('/flora', function () {
    return view('public.flora.flora');
});

Route::get('/herbarium', 'HerbariumController@publicIndex')->name('public.herbarium');
Route::get('/herbarium/detail/{slug}', 'HerbariumController@publicDetail')->name('public.herbarium.detail');
Route::get('herbarium/cari/{cari}', 'HerbariumController@publicSearch')->name('public.herbarium.search');

Route::get('/fauna', function () {
    return view('public.fauna.fauna');
});

Route::get('/tempat_wisata', function () {
    return view('public.tempat_wisata.wisata');
});

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
});
