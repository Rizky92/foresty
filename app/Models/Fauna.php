<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fauna
 * @package App\Models
 * @version July 21, 2020, 11:19 am UTC
 *
 * @property string $nama
 * @property string $latin
 * @property string $deskripsi
 * @property string $habitat
 * @property string $lokasi
 * @property string $img_path
 * @property string $slug
 */
class Fauna extends Model
{
    use SoftDeletes;
    use HasSlug;

    public $table = 'faunas';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'latin',
        'deskripsi',
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
        'latin' => 'string',
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
        'latin' => 'nullable',
        'deskripsi' => 'nullable',
        'habitat' => 'nullable',
        'lokasi' => 'nullable',
        'img_path' => 'mimes:jpg,jpeg,png|max:5012|nullable'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['nama', 'latin'])
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
