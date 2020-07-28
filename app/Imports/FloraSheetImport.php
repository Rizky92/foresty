<?php

namespace App\Imports;

use App\Models\Flora;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FloraSheetImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Flora([
            'nama' => $row['nama'],
            'deskripsi' => $row['deskripsi'],
            'khasiat' => $row['khasiat'],
            'musim' => $row['musim'],
            'habitat' => $row['habitat'],
            'lokasi' => $row['lokasi']
        ]);
    }
}
