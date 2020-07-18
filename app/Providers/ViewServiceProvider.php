<?php

namespace App\Providers;
use App\Models\Treetexa;
use App\Models\MinorArea;
use App\Models\MajorArea;
use App\Models\Gazetteer;
use App\Models\Family;
use App\Models\Country;

use Illuminate\Support\ServiceProvider;
use View;

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
            $treetexaItems = Treetexa::pluck('name','id')->toArray();
            $view->with('treetexaItems', $treetexaItems);
        });
        View::composer(['herbaria.fields'], function ($view) {
            $minor_areaItems = MinorArea::pluck('name','id')->toArray();
            $view->with('minor_areaItems', $minor_areaItems);
        });
        View::composer(['herbaria.fields'], function ($view) {
            $major_areaItems = MajorArea::pluck('name','id')->toArray();
            $view->with('major_areaItems', $major_areaItems);
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
        View::composer(['herbaria.fields'], function ($view) {
            $treetexaItems = Treetexa::pluck('name','id')->toArray();
            $view->with('treetexaItems', $treetexaItems);
        });
        View::composer(['herbaria.fields'], function ($view) {
            $minor_areaItems = MinorArea::pluck('name','id')->toArray();
            $view->with('minor_areaItems', $minor_areaItems);
        });
        View::composer(['herbaria.fields'], function ($view) {
            $major_areaItems = MajorArea::pluck('name','id')->toArray();
            $view->with('major_areaItems', $major_areaItems);
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
        //
    }
}