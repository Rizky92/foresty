<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MinoreArea
 * @package App\Models
 * @version July 21, 2020, 11:20 am UTC
 *
 * @property string $name
 */
class MinoreArea extends Model
{
    use SoftDeletes;

    public $table = 'minore_areas';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required'
    ];


}
