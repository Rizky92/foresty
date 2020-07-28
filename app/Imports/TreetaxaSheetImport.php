<?php

namespace App\Imports;

use App\Models\Treetaxa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TreetaxaSheetImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Treetaxa([
            'nama' => $row['nama']
        ]);
    }
}
