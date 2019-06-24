<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KlasifikasiController extends Controller
{
    public function home(){
        // mengambil data dari table dokter
    	$dokter = DB::table('dokter')->get();
 
    	// mengirim data dokter ke view index   
    	return view('klasifikasi',['dokter' => $dokter]);
        
        
	}
 
}
