<?php

namespace App\Repositories;

use App\Models\Herbarium;
use App\Repositories\BaseRepository;

/**
 * Class HerbariumRepository
 * @package App\Repositories
 * @version July 15, 2020, 12:33 pm UTC
*/

class HerbariumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'latin',
        'collector'
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
        return Herbarium::class;
    }
}
