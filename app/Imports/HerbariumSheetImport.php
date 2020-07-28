<?php

namespace App\Imports;

use App\Models\Herbarium;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class HerbariumSheetImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Herbarium([
            'latin' => $row['latin'],
            'add_coll' => $row['add_coll'],
            'number' => $row['number'],
            'collector' => $row['collector'],
            'collected_date' => $row['collected_date'],
            'prefix' => $row['prefix'],
            'majore_area_id' => $row['majore_area'],
            'minore_area_id' => $row['minore_area'],
            'gazetteer_id' => $row['gazetteer'],
            'country_id' => $row['country'],
            'family_id' => $row['family'],
            'treetaxa_id' => $row['treetaxa'],
            'flora_id' => $row['flora']
        ]);
    }
}
