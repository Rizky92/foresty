<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tumbuhan
 * @package App\Models
 * @version July 15, 2020, 9:01 am UTC
 *
 * @property string $nama
 * @property string $deskripsi
 * @property string $khasiat
 * @property tinyInteger $musim
 * @property string $habitat
 * @property string $lokasi
 */
class tumbuhan extends Model
{
    use SoftDeletes;

    public $table = 'tumbuhans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'deskripsi',
        'khasiat',
        'musim',
        'habitat',
        'lokasi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'habitat' => 'string',
        'lokasi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'deskripsi' => 'required',
        'khasiat' => 'required',
        'musim' => 'required',
        'habitat' => 'required',
        'lokasi' => 'required'
    ];

    
}
