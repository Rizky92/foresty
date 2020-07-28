<?php

namespace App\Models;

use Eloquent as Model;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version July 27, 2020, 12:53 am UTC
 *
 * @property string $judul
 * @property string $deskripsi
 * @property string $slug
 */
class Post extends Model implements Viewable
{
    use SoftDeletes, HasSlug, InteractsWithViews;

    public $table = 'posts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'judul',
        'deskripsi',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'judul' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'required'
    ];

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

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
