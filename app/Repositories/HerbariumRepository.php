<?php

namespace App\Repositories;

use App\Models\Herbarium;
use App\Repositories\BaseRepository;

/**
 * Class HerbariumRepository
 * @package App\Repositories
 * @version July 18, 2020, 5:49 am UTC
*/

class HerbariumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'latin',
        'collector',
        'country_id',
        'family_id',
        'gazetteer_id',
        'major_area_id',
        'minor_area_id',
        'treetexa_id'
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
