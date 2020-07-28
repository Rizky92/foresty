<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Flora
 * @package App\Models
 * @version July 27, 2020, 12:52 am UTC
 *
 * @property string $nama
 * @property string $deskripsi
 * @property string $khasiat
 * @property string $musim
 * @property string $habitat
 * @property string $lokasi
 * @property string $slug
 */
class Flora extends Model implements Searchable
{
    use SoftDeletes, HasSlug;

    public $table = 'floras';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'deskripsi',
        'khasiat',
        'musim',
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
        'khasiat' => 'string',
        'musim' => 'string',
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
        'khasiat' => 'nullable',
        'musim' => 'nullable',
        'habitat' => 'nullable',
        'lokasi' => 'nullable',
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('public.flora');

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
