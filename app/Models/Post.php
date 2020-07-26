<?php

namespace App\Models;

use Eloquent as Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version July 21, 2020, 11:21 am UTC
 *
 * @property string $judul
 * @property string $deskripsi
 * @property string $header_path
 * @property integer $visitors
 * @property string $slug
 */
class Post extends Model implements Viewable
{
    use SoftDeletes;
    use InteractsWithViews;

    public $table = 'posts';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'judul',
        'deskripsi',
        'header_path',
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
        'header_path' => 'string',
        'visitors' => 'integer',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'judul' => 'required',
        'deskripsi' => 'nullable',
        'header_path' => 'mimes:jpg,jpeg,png|max:5012'
    ];


}
