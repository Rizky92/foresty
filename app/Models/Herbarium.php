<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Herbarium
 * @package App\Models
 * @version July 15, 2020, 12:33 pm UTC
 *
 * @property string $latin
 * @property string $collector
 * @property tinyInteger $number
 * @property string $prefix
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
        'prefix'
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
        'prefix' => 'string'
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
        'prefix' => 'required'
    ];

    
}
