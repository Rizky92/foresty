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

Route::get('/profil', function () {
    return view('public.profil.profil');
});

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

Route::get('/herbarium/detail', function () {
    return view('public.herbarium.detail');
});




















Route::resource('families', 'FamilyController');

Route::resource('gazetteers', 'GazetteerController');

Route::resource('treetexas', 'TreetexaController');

Route::resource('countries', 'CountryController');

Route::resource('majorAreas', 'MajorAreaController');

Route::resource('minorAreas', 'MinorAreaController');

Route::resource('tumbuhans', 'TumbuhanController');



Route::resource('herbaria', 'HerbariumController');

