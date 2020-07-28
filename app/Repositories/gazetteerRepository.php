<?php

namespace App\Repositories;

use App\Models\Gazetteer;
use App\Repositories\BaseRepository;

/**
 * Class GazetteerRepository
 * @package App\Repositories
 * @version July 27, 2020, 12:50 am UTC
*/

class GazetteerRepository extends BaseRepository
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
        return Gazetteer::class;
    }
}
