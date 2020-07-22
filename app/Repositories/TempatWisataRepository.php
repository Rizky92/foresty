<?php

namespace App\Repositories;

use App\Models\TempatWisata;
use App\Repositories\BaseRepository;

/**
 * Class TempatWisataRepository
 * @package App\Repositories
 * @version July 21, 2020, 11:22 am UTC
*/

class TempatWisataRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
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
        return TempatWisata::class;
    }
}
