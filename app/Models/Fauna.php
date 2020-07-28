<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fauna
 * @package App\Models
 * @version July 27, 2020, 12:53 am UTC
 *
 * @property string $nama
 * @property string $deskripsi
 * @property string $habitat
 * @property string $lokasi
 * @property string $slug
 */
class Fauna extends Model implements Searchable
{
    use SoftDeletes, HasSlug;

    public $table = 'faunas';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'deskripsi',
        'habitat',
        'lokasi',
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
        'habitat' => 'string',
        'lokasi' => 'string',
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
        'habitat' => 'nullable',
        'lokasi' => 'nullable'
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('public.fauna');

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
