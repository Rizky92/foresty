<?php

namespace App\Repositories;

use App\Models\Family;
use App\Repositories\BaseRepository;

/**
 * Class FamilyRepository
 * @package App\Repositories
 * @version July 18, 2020, 4:43 am UTC
*/

class FamilyRepository extends BaseRepository
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
        return Family::class;
    }
}
