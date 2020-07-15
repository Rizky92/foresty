<?php

namespace App\Repositories;

use App\Models\minor_area;
use App\Repositories\BaseRepository;

/**
 * Class minor_areaRepository
 * @package App\Repositories
 * @version July 15, 2020, 9:12 am UTC
*/

class minor_areaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return minor_area::class;
    }
}
