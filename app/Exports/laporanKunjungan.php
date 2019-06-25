<?php

namespace App\Exports;

use App\laporanModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class laporanKunjunganExports implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return laporanKunjungan::all();
    }
}
