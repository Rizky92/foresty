<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Herbarium
 * @package App\Models
 * @version July 18, 2020, 5:49 am UTC
 *
 * @property string $latin
 * @property string $collector
 * @property integer $number
 * @property string $prefix
 * @property string $img_path
 * @property integer $country_id
 * @property integer $family_id
 * @property integer $gazetteer_id
 * @property integer $major_area_id
 * @property integer $minor_area_id
 * @property integer $treetexa_id
 */
class Herbarium extends Model
{
    use SoftDeletes;

    public $table = 'herbaria';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'latin',
        'collector',
        'number',
        'prefix',
        'img_path',
        'country_id',
        'family_id',
        'gazetteer_id',
        'major_area_id',
        'minor_area_id',
        'treetexa_id'
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
        'number' => 'integer',
        'prefix' => 'string',
        'img_path' => 'string',
        'country_id' => 'integer',
        'family_id' => 'integer',
        'gazetteer_id' => 'integer',
        'major_area_id' => 'integer',
        'minor_area_id' => 'integer',
        'treetexa_id' => 'integer'
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
        'img_path' => 'required',
        'country_id' => 'required',
        'family_id' => 'required',
        'gazetteer_id' => 'required',
        'major_area_id' => 'required',
        'minor_area_id' => 'required',
        'treetexa_id' => 'required'
    ];

    
}
