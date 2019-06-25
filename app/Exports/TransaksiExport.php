<?php

namespace App\Exports;

use App\laporanTransaksi;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransaksiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return laporanTransaksi::all();
    }
}
