<?php

namespace App\Http\Controllers;
use App\jadwal_praktek;
use App\Dokter;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalDokterController extends Controller
{
    public function inputjadwal($id){
        $dokter = DB::table('dokter')->where('id',$id)->get();
        return view('inputjadwal',['dokter' => $dokter]);
    }
    
    public function store(Request $request,Dokter $dokter)
    {

        
	    // // insert data ke table pegawai
        $this->validate($request,[
             'alamat' => 'required',
             'waktu_buka' => 'required',
    	 	'waktu_tutup' => 'required'
         ]);
        
         $data = new jadwal_praktek([
             'alamat' => $request->alamat,
             'hari' => $request->hari,   
             'waktu_buka' => $request->waktu_buka,
             'waktu_tutup' => $request->waktu_tutup,
             'id_dokter' => $dokter->id
         ]);
        
         $data->save();
	     // alihkan halaman ke halaman pegawai
	     return redirect('/datadokter');
    }
}
