<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ExcelImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'family' => new FamilySheetImport(),
            'treetaxa' => new TreetaxaSheetImport(),
            'flora' => new FloraSheetImport(),
            'herbarium' => new HerbariumSheetImport()
        ];
    }
}
