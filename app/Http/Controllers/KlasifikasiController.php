<?php

namespace App\Http\Controllers;
use App\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KlasifikasiController extends Controller
{
    public function home(Dokter $dokter){
        // mengambil data dari table dokter
		$dokter = DB::table('dokter')->get();
		// return $dokter->sum('potensi');
			// Ambil variabel dari form
			
			
			$total_peresepan = $dokter->sum('potensi');

		return $potensi;
 
    	// mengirim data dokter ke view index   
    	return view('klasifikasi',compact('dokter','total_peresepan'));
        
        
	}
 
}
