<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Berita
 * @package App\Models
 * @version July 25, 2020, 9:43 pm UTC
 *
 * @property string $judul
 * @property string $deskripsi
 * @property string $slug
 * @property string $img_path
 * @property string $img_caption
 */
class Berita extends Model implements Viewable
{
    use SoftDeletes, InteractsWithViews, HasSlug;

    public $table = 'beritas';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'judul',
        'deskripsi',
        'slug',
        'img_path',
        'img_caption'
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
        'img_path' => 'string',
        'img_caption' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'required',
        'img_path' => 'mimes:jpg,jpeg,png|max:5012'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('judul')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
