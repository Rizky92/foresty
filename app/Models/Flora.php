<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Flora
 * @package App\Models
 * @version July 18, 2020, 3:37 pm UTC
 *
 * @property string $nama
 * @property string $deskripsi
 * @property string $khasiat
 * @property string $musim
 * @property string $habitat
 * @property string $lokasi
 * @property string $img_path
 */
class Flora extends Model
{
    use SoftDeletes;

    public $table = 'floras';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'deskripsi',
        'khasiat',
        'musim',
        'habitat',
        'lokasi',
        'img_path'
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
        'lokasi' => 'string',
        'img_path' => 'string'
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
        'lokasi' => 'required',
        'img_path' => 'required|mimes:jpg,jpeg,png|max:5012'
    ];

    
}
