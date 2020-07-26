<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gallery
 * @package App\Models
 * @version July 21, 2020, 11:22 am UTC
 *
 * @property \App\Models\Post $post
 * @property string $judul
 * @property string $deskripsi
 * @property string $slug
 * @property string $img_path
 * @property integer $post_id
 */
class Gallery extends Model
{
    use SoftDeletes;
    use HasSlug;

    public $table = 'galleries';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'judul',
        'deskripsi',
        'slug',
        'img_path',
        'post_id'
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
        'post_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'required',
        'deskripsi' => 'nullable',
        'img_path' => 'required|mimes:jpg,jpeg,png|max:5012',
        'post_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class);
    }

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
