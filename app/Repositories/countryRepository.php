<?php

namespace App\Repositories;

use App\Models\country;
use App\Repositories\BaseRepository;

/**
 * Class countryRepository
 * @package App\Repositories
 * @version July 15, 2020, 9:12 am UTC
*/

class countryRepository extends BaseRepository
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
        return country::class;
    }
}
