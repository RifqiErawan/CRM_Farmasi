<?php

namespace App\Http\Controllers;
use App\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatadokterController extends Controller
{
    public function home(){
        // mengambil data dari table dokter
    	$dokter = Dokter::all();

    	// mengirim data dokter ke view index
    	return view('datadokter',['dokter' => $dokter]);

	}

	public function input(){
		return view('input');
	}

    public function store(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('dokter')->insert([
		    'nama' => $request->nama,
		    'spesialisasi' => $request->spesialisasi,
		    'kontak' => $request->kontak,
            'potensi' => '',
            'status'=>'',
            'idJadwal'=>''
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/datadokter');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $dokter = DB::table('dokter')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['dokter' => $dokter]);

    }

    public function update(Request $request)
    {
        // update data dokter
        DB::table('dokter')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'spesialisasi' => $request->spesialisasi,
            'kontak' => $request->kontak,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/datadokter');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('dokter')->where('id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/datadokter');
    }




}
