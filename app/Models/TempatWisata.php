<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TempatWisata
 * @package App\Models
 * @version July 27, 2020, 12:53 am UTC
 *
 * @property string $nama
 * @property string $deskripsi
 * @property string $slug
 */
class TempatWisata extends Model implements Searchable
{
    use SoftDeletes, HasSlug;

    public $table = 'tempat_wisatas';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
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
        'nama' => 'string',
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
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('public.wisata');

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->nama,
            $url
        );
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('nama')
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
