<?php

namespace App\Repositories;

use App\Models\tumbuhan;
use App\Repositories\BaseRepository;

/**
 * Class tumbuhanRepository
 * @package App\Repositories
 * @version July 15, 2020, 9:01 am UTC
*/

class tumbuhanRepository extends BaseRepository
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
        return tumbuhan::class;
    }
}
