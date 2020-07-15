<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class carousel
 * @package App\Models
 * @version July 13, 2020, 12:12 am UTC
 *
 * @property string $judul
 * @property string $sub_judul
 * @property string $img_path
 * @property string $url
 */
class carousel extends Model
{
    use SoftDeletes;

    public $table = 'carousels';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'judul',
        'sub_judul',
        'img_path',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'judul' => 'string',
        'img_path' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'required',
        'sub_judul' => 'required',
        'img_path' => 'required',
        'url' => 'required'
    ];

    
}
