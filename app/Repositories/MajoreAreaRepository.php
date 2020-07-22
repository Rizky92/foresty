<?php

namespace App\Repositories;

use App\Models\MajoreArea;
use App\Repositories\BaseRepository;

/**
 * Class MajoreAreaRepository
 * @package App\Repositories
 * @version July 21, 2020, 11:20 am UTC
*/

class MajoreAreaRepository extends BaseRepository
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
        return MajoreArea::class;
    }
}
