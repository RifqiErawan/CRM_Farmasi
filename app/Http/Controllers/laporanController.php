<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\laporanKunjungan;
use App\laporanTransaksi;

use App\Exports\TransaksiExport;
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

    public function laporanTransaksi(){
    	$transaksi = laporanTransaksi::all();
    	return view('daftarLaporanTransaksi',['laporan'=>$transaksi]);
    }

    public function exportTransaksi(){
    	return Excel::download(new TransaksiExport,'laporanTransaksi.xlsx');
    }
}
