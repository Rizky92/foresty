<?php

namespace App\Providers;
use App\Models\Treetaxa;
use App\Models\Post;
use App\Models\Flora;

use App\Models\Treetexa;
use App\Models\Gazetteer;
use App\Models\MinoreArea;
use App\Models\MajoreArea;
use App\Models\Family;
use App\Models\Country;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
//use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['herbaria.fields'], function ($view) {
            $floraItems = Flora::pluck('nama','id')->toArray();
            $view->with('floraItems', $floraItems);
        });
        View::composer(['herbaria.fields'], function ($view) {
            $treetaxaItems = Treetaxa::pluck('name','id')->toArray();
            $view->with('treetaxaItems', $treetaxaItems);
        });
        View::composer(['herbaria.fields'], function ($view) {
            $minore_areaItems = MinoreArea::pluck('name','id')->toArray();
            $view->with('minore_areaItems', $minore_areaItems);
        });
        View::composer(['herbaria.fields'], function ($view) {
            $majore_areaItems = MajoreArea::pluck('name','id')->toArray();
            $view->with('majore_areaItems', $majore_areaItems);
        });
        View::composer(['herbaria.fields'], function ($view) {
            $gazetteerItems = Gazetteer::pluck('name','id')->toArray();
            $view->with('gazetteerItems', $gazetteerItems);
        });
        View::composer(['herbaria.fields'], function ($view) {
            $familyItems = Family::pluck('name','id')->toArray();
            $view->with('familyItems', $familyItems);
        });
        View::composer(['herbaria.fields'], function ($view) {
            $countryItems = Country::pluck('name','id')->toArray();
            $view->with('countryItems', $countryItems);
        });
        View::composer(['backend.galleries.fields'], function ($view) {
            $postItems = Post::pluck('judul','id')->toArray();
            $view->with('postItems', $postItems);
        });
        View::composer(['backend.herbaria.fields'], function ($view) {
            $floraItems = Flora::pluck('nama','id')->toArray();
            $view->with('floraItems', $floraItems);
        });
        View::composer(['backend.herbaria.fields'], function ($view) {
            $treetaxaItems = Treetaxa::pluck('nama','id')->toArray();
            $view->with('treetaxaItems', $treetaxaItems);
        });
        View::composer(['backend.herbaria.fields'], function ($view) {
            $minore_areaItems = MinoreArea::pluck('nama','id')->toArray();
            $view->with('minore_areaItems', $minore_areaItems);
        });
        View::composer(['backend.herbaria.fields'], function ($view) {
            $majore_areaItems = MajoreArea::pluck('nama','id')->toArray();
            $view->with('majore_areaItems', $majore_areaItems);
        });
        View::composer(['backend.herbaria.fields'], function ($view) {
            $gazetteerItems = Gazetteer::pluck('nama','id')->toArray();
            $view->with('gazetteerItems', $gazetteerItems);
        });
        View::composer(['backend.herbaria.fields'], function ($view) {
            $familyItems = Family::pluck('nama','id')->toArray();
            $view->with('familyItems', $familyItems);
        });
        View::composer(['backend.herbaria.fields'], function ($view) {
            $countryItems = Country::pluck('nama','id')->toArray();
            $view->with('countryItems', $countryItems);
        });
    }
}
