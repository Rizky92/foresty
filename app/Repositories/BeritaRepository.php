<?php

namespace App\Repositories;

use App\Models\Berita;
use App\Repositories\BaseRepository;

/**
 * Class BeritaRepository
 * @package App\Repositories
 * @version July 25, 2020, 9:43 pm UTC
*/

class BeritaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'judul',
        'deskripsi',
        'slug'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Berita::class;
    }
}
