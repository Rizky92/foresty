<?php

namespace App\Repositories;

use App\Models\Treetaxa;
use App\Repositories\BaseRepository;

/**
 * Class TreetaxaRepository
 * @package App\Repositories
 * @version July 27, 2020, 12:51 am UTC
*/

class TreetaxaRepository extends BaseRepository
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
        return Treetaxa::class;
    }
}
