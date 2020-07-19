<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Treetexa
 * @package App\Models
 * @version July 18, 2020, 12:30 pm UTC
 *
 * @property string $name
 */
class Treetexa extends Model
{
    use SoftDeletes;

    public $table = 'treetexas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
