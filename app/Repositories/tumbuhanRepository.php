<?php

namespace App\Repositories;

use App\Models\Tumbuhan;
use App\Repositories\BaseRepository;

/**
 * Class TumbuhanRepository
 * @package App\Repositories
 * @version July 18, 2020, 4:47 am UTC
*/

class TumbuhanRepository extends BaseRepository
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
        return Tumbuhan::class;
    }
}
