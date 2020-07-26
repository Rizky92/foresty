<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Herbarium
 * @package App\Models
 * @version July 22, 2020, 4:57 am UTC
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
 * @property string $img_path
 * @property integer $country_id
 * @property integer $family_id
 * @property integer $gazetteer_id
 * @property integer $majore_area_id
 * @property integer $minore_area_id
 * @property integer $treetaxa_id
 * @property integer $flora_id
 * @property string $slug
 */
class Herbarium extends Model
{
    use SoftDeletes;
    use HasSlug;

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
        'img_path',
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
        'img_path' => 'string',
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
        'latin' => 'required',
        'collector' => 'nullable',
        'add_coll' => 'nullable',
        'collected_date' => 'nullable',
        'number' => 'nullable',
        'prefix' => 'nullable',
        'locality_note' => 'nullable',
        'img_path' => 'mimes:jpg,jpeg,png|max:5012|nullable',
        'country_id' => 'required',
        'family_id' => 'required',
        'gazetteer_id' => 'required',
        'majore_area_id' => 'required',
        'minore_area_id' => 'required',
        'treetaxa_id' => 'required',
        'flora_id' => 'required',
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

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('latin')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
