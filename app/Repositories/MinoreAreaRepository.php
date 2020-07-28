<?php

namespace App\Repositories;

use App\Models\MinoreArea;
use App\Repositories\BaseRepository;

/**
 * Class MinoreAreaRepository
 * @package App\Repositories
 * @version July 27, 2020, 12:51 am UTC
*/

class MinoreAreaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return MinoreArea::class;
    }
}
