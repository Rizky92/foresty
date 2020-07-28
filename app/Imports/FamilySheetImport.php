<?php

namespace App\Imports;

use App\Models\Family;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FamilySheetImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Family([
            'nama' => $row['nama']
        ]);
    }
}
