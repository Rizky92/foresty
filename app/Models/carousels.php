<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class carousels
 * @package App\Models
 * @version July 13, 2020, 12:40 am UTC
 *
 * @property string $judul
 * @property string $subjudul
 * @property string $url
 * @property string $img_path
 */
class carousels extends Model
{
    use SoftDeletes;

    public $table = 'carousels';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'judul',
        'subjudul',
        'url',
        'img_path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'judul' => 'string',
        'subjudul' => 'string',
        'url' => 'string',
        'img_path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'required',
        'subjudul' => 'required',
        'url' => 'required',
        'img_path' => 'required'
    ];

    
}
