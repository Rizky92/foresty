<?php

namespace App\Repositories;

use App\Models\Herbarium;
use App\Repositories\BaseRepository;

/**
 * Class HerbariumRepository
 * @package App\Repositories
 * @version July 18, 2020, 3:35 pm UTC
*/

class HerbariumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'latin',
        'collector',
        'number',
        'country_id',
        'family_id',
        'gazetteer_id',
        'majore_area_id',
        'minore_area_id',
        'treetexa_id',
        'flora_id'
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
