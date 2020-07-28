<?php

namespace App\Imports;

use App\Herbarium;
use Maatwebsite\Excel\Concerns\ToModel;

class HerbariumImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Herbarium([
            //
        ]);
    }
}
