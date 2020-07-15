<?php

namespace App\Repositories;

use App\Models\family;
use App\Repositories\BaseRepository;

/**
 * Class familyRepository
 * @package App\Repositories
 * @version July 15, 2020, 9:09 am UTC
*/

class familyRepository extends BaseRepository
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
        return family::class;
    }
}
