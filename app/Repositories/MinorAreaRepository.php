<?php

namespace App\Repositories;

use App\Models\MinorArea;
use App\Repositories\BaseRepository;

/**
 * Class MinorAreaRepository
 * @package App\Repositories
 * @version July 18, 2020, 4:45 am UTC
*/

class MinorAreaRepository extends BaseRepository
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
        return MinorArea::class;
    }
}
