<?php

namespace App\Repositories;

use App\Models\gazetteer;
use App\Repositories\BaseRepository;

/**
 * Class gazetteerRepository
 * @package App\Repositories
 * @version July 15, 2020, 9:09 am UTC
*/

class gazetteerRepository extends BaseRepository
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
        return gazetteer::class;
    }
}
