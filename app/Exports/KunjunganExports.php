<?php

namespace App\Exports;

use App\laporanKunjungan;
use Maatwebsite\Excel\Concerns\FromCollection;

class KunjunganExports implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return laporanKunjungan::all();
    }
}
