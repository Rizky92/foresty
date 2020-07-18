<?php

namespace App\Repositories;

use App\Models\MajorArea;
use App\Repositories\BaseRepository;

/**
 * Class MajorAreaRepository
 * @package App\Repositories
 * @version July 18, 2020, 4:45 am UTC
*/

class MajorAreaRepository extends BaseRepository
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
        return MajorArea::class;
    }
}
