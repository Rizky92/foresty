<?php

namespace App\Repositories;

use App\Models\treetexa;
use App\Repositories\BaseRepository;

/**
 * Class treetexaRepository
 * @package App\Repositories
 * @version July 15, 2020, 9:11 am UTC
*/

class treetexaRepository extends BaseRepository
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
        return treetexa::class;
    }
}
