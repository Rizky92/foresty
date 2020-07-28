<?php

namespace App\Repositories;

use App\Models\MajoreArea;
use App\Repositories\BaseRepository;

/**
 * Class MajoreAreaRepository
 * @package App\Repositories
 * @version July 27, 2020, 12:51 am UTC
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
