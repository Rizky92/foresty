<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tumbuhan
 * @package App\Models
 * @version July 18, 2020, 4:47 am UTC
 *
 * @property string $nama
 * @property string $deskripsi
 * @property string $khasiat
 * @property string $musim
 * @property string $habitat
 * @property string $lokasi
 */
class Tumbuhan extends Model
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
        'musim' => 'string',
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
