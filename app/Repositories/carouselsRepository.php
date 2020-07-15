<?php

namespace App\Repositories;

use App\Models\carousels;
use App\Repositories\BaseRepository;

/**
 * Class carouselsRepository
 * @package App\Repositories
 * @version July 13, 2020, 12:40 am UTC
*/

class carouselsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'judul'
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
        return carousels::class;
    }
}
