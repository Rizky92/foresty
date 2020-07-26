<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TempatWisata
 * @package App\Models
 * @version July 21, 2020, 11:22 am UTC
 *
 * @property string $nama
 * @property string $deskripsi
 * @property string $img_path
 * @property string $slug
 */
class TempatWisata extends Model
{
    use SoftDeletes;
    use HasSlug;

    public $table = 'tempat_wisatas';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nama',
        'deskripsi',
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
        'img_path' => 'mimes:jpg,jpeg,png|max:5012|nullable'
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
