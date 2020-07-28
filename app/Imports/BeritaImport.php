<?php

namespace App\Imports;

use App\Models\Berita;
use Maatwebsite\Excel\Concerns\ToModel;

class BeritaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Berita([
            'judul' => $row[0],
            'deskripsi' => $row[1],
        ]);
    }
}
