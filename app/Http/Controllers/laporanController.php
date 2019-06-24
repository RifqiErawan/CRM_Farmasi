<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\laporanKunjungan;

use App\Exports\KunjunganExports;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class laporanController extends Controller
{
    public function laporanKunjungan(){
    	$kunjungan =laporanKunjungan::all();
    	return view('daftarLaporanKunjungan',['laporan'=>$kunjungan]);

    }

    public function exportKunjungan(){
    	return Excel::download(new KunjunganExports,'laporanKunjungan.xlsx');
    }
}
