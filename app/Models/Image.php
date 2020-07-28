<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Image
 * @package App\Models
 * @version July 27, 2020, 12:55 am UTC
 *
 * @property string $judul
 * @property string $deskripsi
 * @property morphs $imageable
 * @property string $slug
 * @property string $img_path
 */
class Image extends Model
{
    use SoftDeletes, HasSlug;

    public $table = 'images';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'judul',
        'deskripsi',
        'imageable',
        'slug',
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
        'slug' => 'string',
        'img_path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'required',
        'deskripsi' => 'nullable',
        'img_path' => 'required|mimes:jpg,jpeg,png|max:5012'
    ];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('judul')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
