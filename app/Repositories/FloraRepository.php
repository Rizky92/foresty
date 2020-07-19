<?php

namespace App\Repositories;

use App\Models\Flora;
use App\Repositories\BaseRepository;

/**
 * Class FloraRepository
 * @package App\Repositories
 * @version July 18, 2020, 3:37 pm UTC
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
        'habitat',
        'lokasi'
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
