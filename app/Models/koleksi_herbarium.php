<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class koleksi_herbarium
 * @package App\Models
 * @version July 15, 2020, 9:07 am UTC
 *
 * @property string $nama_latin
 * @property string $collector
 * @property integer $number
 * @property string $prefix
 */
class koleksi_herbarium extends Model
{
    use SoftDeletes;

    public $table = 'koleksi_herbaria';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_latin',
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
        'nama_latin' => 'string',
        'collector' => 'string',
        'number' => 'integer',
        'prefix' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_latin' => 'required',
        'collector' => 'required',
        'number' => 'required',
        'prefix' => 'required|max:5'
    ];

    
}
