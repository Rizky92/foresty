<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Padosoft\Sluggable\HasSlug;
use Padosoft\Sluggable\SlugOptions;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Herbarium
 * @package App\Models
 * @version July 27, 2020, 12:52 am UTC
 *
 * @property \App\Models\Country $country
 * @property \App\Models\Family $family
 * @property \App\Models\Gazetteer $gazetteer
 * @property \App\Models\MajoreArea $majoreArea
 * @property \App\Models\MinoreArea $minoreArea
 * @property \App\Models\Treetaxa $treetaxa
 * @property \App\Models\Flora $flora
 * @property string $latin
 * @property string $collector
 * @property string $add_coll
 * @property string $collected_date
 * @property integer $number
 * @property string $prefix
 * @property string $locality_note
 * @property integer $country_id
 * @property integer $family_id
 * @property integer $gazetteer_id
 * @property integer $majore_area_id
 * @property integer $minore_area_id
 * @property integer $treetaxa_id
 * @property integer $flora_id
 * @property string $slug
 */
class Herbarium extends Model implements Searchable, Viewable
{
    use SoftDeletes, HasSlug, InteractsWithViews;

    public $table = 'herbaria';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'latin',
        'collector',
        'add_coll',
        'collected_date',
        'number',
        'prefix',
        'locality_note',
        'country_id',
        'family_id',
        'gazetteer_id',
        'majore_area_id',
        'minore_area_id',
        'treetaxa_id',
        'flora_id',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'latin' => 'string',
        'collector' => 'string',
        'add_coll' => 'string',
        'collected_date' => 'date',
        'number' => 'integer',
        'prefix' => 'string',
        'locality_note' => 'string',
        'country_id' => 'integer',
        'family_id' => 'integer',
        'gazetteer_id' => 'integer',
        'majore_area_id' => 'integer',
        'minore_area_id' => 'integer',
        'treetaxa_id' => 'integer',
        'flora_id' => 'integer',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'latin' => 'nullable',
        'collector' => 'nullable',
        'add_coll' => 'nullable',
        'collected_date' => 'nullable',
        'number' => 'nullable',
        'prefix' => 'nullable',
        'locality_note' => 'nullable',
        'country_id' => 'nullable',
        'family_id' => 'nullable',
        'gazetteer_id' => 'nullable',
        'majore_area_id' => 'nullable',
        'minore_area_id' => 'nullable',
        'treetaxa_id' => 'nullable',
        'flora_id' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function family()
    {
        return $this->belongsTo(\App\Models\Family::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function gazetteer()
    {
        return $this->belongsTo(\App\Models\Gazetteer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function majoreArea()
    {
        return $this->belongsTo(\App\Models\MajoreArea::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function minoreArea()
    {
        return $this->belongsTo(\App\Models\MinoreArea::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function treetaxa()
    {
        return $this->belongsTo(\App\Models\Treetaxa::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function flora()
    {
        return $this->belongsTo(\App\Models\Flora::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('public.herbarium.detail', $this->slug);

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->latin,
            $url
        );
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['latin','id'])
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
