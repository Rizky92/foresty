<?php

namespace App\Repositories;

use App\Models\Flora;
use App\Repositories\BaseRepository;

/**
 * Class FloraRepository
 * @package App\Repositories
 * @version July 27, 2020, 12:52 am UTC
*/

class FloraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'deskripsi',
        'khasiat',
        'musim',
        'habitat',
        'lokasi',
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
        return Flora::class;
    }
}
