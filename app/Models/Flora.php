<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Flora
 * @package App\Models
 * @version July 22, 2020, 4:57 am UTC
 *
 * @property string $nama
 * @property string $deskripsi
 * @property string $khasiat
 * @property string $musim
 * @property string $habitat
 * @property string $lokasi
 * @property string $img_path
 * @property string $slug
 */
class Flora extends Model
{
    use SoftDeletes;
    use HasSlug;

    public $table = 'floras';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'deskripsi',
        'khasiat',
        'musim',
        'habitat',
        'lokasi',
        'img_path',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'khasiat' => 'string',
        'musim' => 'string',
        'habitat' => 'string',
        'lokasi' => 'string',
        'img_path' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'deskripsi' => 'nullable',
        'khasiat' => 'nullable',
        'musim' => 'nullable',
        'habitat' => 'nullable',
        'lokasi' => 'nullable',
        'img_path' => 'mimes:jpg,jpeg,png|max:5012|nullable',
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('nama')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
