<?php

namespace App\Repositories;

use App\Models\Fauna;
use App\Repositories\BaseRepository;

/**
 * Class FaunaRepository
 * @package App\Repositories
 * @version July 21, 2020, 11:19 am UTC
*/

class FaunaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'latin',
        'deskripsi',
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
        return Fauna::class;
    }
}
