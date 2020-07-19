<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Herbarium
 * @package App\Models
 * @version July 18, 2020, 3:35 pm UTC
 *
 * @property \App\Models\Country $country
 * @property \App\Models\Family $family
 * @property \App\Models\Gazetteer $gazetteer
 * @property \App\Models\MajoreArea $majoreArea
 * @property \App\Models\MinoreArea $minoreArea
 * @property \App\Models\Treetexa $treetexa
 * @property \App\Models\Flora $flora
 * @property string $latin
 * @property string $collector
 * @property string $collected_date
 * @property integer $number
 * @property string $prefix
 * @property integer $country_id
 * @property integer $family_id
 * @property integer $gazetteer_id
 * @property integer $majore_area_id
 * @property integer $minore_area_id
 * @property integer $treetexa_id
 * @property integer $flora_id
 * @property string $img_path
 */
class Herbarium extends Model
{
    use SoftDeletes;

    public $table = 'herbaria';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'latin',
        'collector',
        'collected_date',
        'number',
        'prefix',
        'country_id',
        'family_id',
        'gazetteer_id',
        'majore_area_id',
        'minore_area_id',
        'treetexa_id',
        'flora_id',
        'img_path'
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
        'collected_date' => 'date',
        'number' => 'integer',
        'prefix' => 'string',
        'country_id' => 'integer',
        'family_id' => 'integer',
        'gazetteer_id' => 'integer',
        'majore_area_id' => 'integer',
        'minore_area_id' => 'integer',
        'treetexa_id' => 'integer',
        'flora_id' => 'integer',
        'img_path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'latin' => 'required',
        'collector' => 'required',
        'number' => 'required',
        'prefix' => 'required',
        'img_path' => 'required|mimes:jpg,jpeg,png|max:5012'
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
    public function treetexa()
    {
        return $this->belongsTo(\App\Models\Treetexa::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function flora()
    {
        return $this->belongsTo(\App\Models\Flora::class);
    }
}
