<?php

namespace App\Repositories;

use App\Models\koleksi_herbarium;
use App\Repositories\BaseRepository;

/**
 * Class koleksi_herbariumRepository
 * @package App\Repositories
 * @version July 15, 2020, 9:07 am UTC
*/

class koleksi_herbariumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_latin'
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
        return koleksi_herbarium::class;
    }
}
