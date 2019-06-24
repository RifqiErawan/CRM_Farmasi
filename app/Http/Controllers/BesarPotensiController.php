<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BesarPotensiController extends Controller
{

    public function home(){

		 // mengambil data dari table dokter
		 $dokter = DB::table('dokter')->get();


        return view('besarpotensi',compact('dokter'));
	}

	public function input_potensi($id_dokter){

		// mengambil data pegawai berdasarkan id yang dipilih
		$dokter = DB::table('dokter')->where('id',$id_dokter)->get();
		return view('inputbesarpotensi',compact('dokter'));
	}


    public function store(Request $request)
    {
		// insert data ke table besar_potensi


	    // DB::table('besar_potensi')->insert([
		//     'nama' => $request->nama,
		//     'banyak_produk' => $request->bayak_produk,
        //     'h_obat_sejenis' => $request->h_obat_sejenis,
		//     'h_obat_sejenis_resep' => $request->h_obat_sejenis_resep,
		//     'jum_hari_praktek' => $request->jum_hari_praktek

	    // ]);
	    // // alihkan halaman ke halaman pegawai
	    // return redirect('/datadokter');
	}

	public function hitung(Request $request){


		$dokter = DB::table('dokter')->get();

		// Ambil variabel dari form
	$a = $request->jum_hari_prak;
	$b = $request->harga_obat_sejenis;
	$c = $request->harga_obat_sejenis_resep;
	$d = $request->jumlah_hari_praktek;
	$e = $request->harga_obat;

	$potensi_peresepan = $a * $b * $c * $d * $e;
	DB::table('dokter')->where('id_dokter',$request->id_dokter)->update([
		'potensi' => $potensi_peresepan
	]);

		return view('hasilhitung',compact('potensi_peresepan','dokter'));

	}

}
