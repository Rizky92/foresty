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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');


Auth::routes(['verify' => false]);

Route::get('/dashboard', 'HomeController@index')->middleware('verified');


Route::resource('carousels', 'carouselsController');

Route::get('/flora', function () {
    return view('public.flora.flora');
});

Route::get('/fauna', function () {
    return view('public.fauna.fauna');
});

Route::get('/herbarium', function () {
    return view('public.herbarium.herbarium');
});

Route::get('/tempat_wisata', function () {
    return view('public.tempat_wisata.wisata');
});

Route::get('/aksesibilitas', function () {
    return view('public.profil.aksesibiltas');
});

Route::get('/lokasi', function () {
    return view('public.profil.lokasi');
});

Route::get('/pengelola', function () {
    return view('public.profil.pengelola');
});

Route::get('/sejarah', function () {
    return view('public.profil.sejarah');
});

Route::get('/topografi_dan_hidrologi', function () {
    return view('public.profil.topo_hidro');
});


Route::resource('tumbuhans', 'tumbuhanController');

Route::resource('koleksiHerbaria', 'koleksi_herbariumController');

Route::resource('families', 'familyController');

Route::resource('gazetteers', 'gazetteerController');

Route::resource('treetexas', 'treetexaController');

Route::resource('minorAreas', 'minor_areaController');

Route::resource('countries', 'countryController');

Route::resource('majorAreas', 'major_areaController');