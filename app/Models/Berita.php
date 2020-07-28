<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * Class Berita
 * @package App\Models
 * @version July 27, 2020, 12:53 am UTC
 *
 * @property string $judul
 * @property string $deskripsi
 * @property string $slug
 */
class Berita extends Model implements Searchable, Viewable
{
    use SoftDeletes, HasSlug, InteractsWithViews;

    public $table = 'beritas';


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

    public function getSearchResult(): SearchResult
    {
        $url = route('public.berita.detail', $this->slug);

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->judul,
            $url
        );
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

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
