<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MajoreArea
 * @package App\Models
 * @version July 18, 2020, 12:35 pm UTC
 *
 * @property string $name
 */
class MajoreArea extends Model
{
    use SoftDeletes;

    public $table = 'majore_areas';
    

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
