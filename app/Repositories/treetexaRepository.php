<?php

namespace App\Repositories;

use App\Models\Treetexa;
use App\Repositories\BaseRepository;

/**
 * Class TreetexaRepository
 * @package App\Repositories
 * @version July 18, 2020, 12:30 pm UTC
*/

class TreetexaRepository extends BaseRepository
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
        return Treetexa::class;
    }
}
