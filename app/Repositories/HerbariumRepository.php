<?php

namespace App\Repositories;

use App\Models\Herbarium;
use App\Repositories\BaseRepository;

/**
 * Class HerbariumRepository
 * @package App\Repositories
 * @version July 22, 2020, 4:57 am UTC
*/

class HerbariumRepository extends BaseRepository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'latin',
        'collector',
        'add_coll',
        'collected_date',
        'number',
        'prefix',
        'locality_note',
        'treetaxa_id',
        'slug'
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
