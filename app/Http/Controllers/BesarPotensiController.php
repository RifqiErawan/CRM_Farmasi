<?php

namespace App\Http\Controllers;
use App\Dokter;
use App\jadwal_praktek;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BesarPotensiController extends Controller
{

    public function home(){

		 // mengambil data dari table dokter
		 $dokter = DB::table('dokter')->get();


        return view('besarpotensi',compact('dokter'));
	}
<<<<<<< HEAD

	public function input_potensi($id){
=======

	
// 	public function input_potensi($id){

// 		// mengambil data pegawai berdasarkan id yang dipilih
// 		$dokter = DB::table('dokter')->where('id',$id)->get();
// }
>>>>>>> 87b1d2e64b6897cd91925ad2459d6acf71a174e9

    $dokter = DB::table('dokter')->where('id',$id)->get();

<<<<<<< HEAD
=======
		// mengambil data pegawai berdasarkan id yang dipilih
		$dokter = DB::table('dokter')->where('id',$id_dokter)->get();

>>>>>>> 87b1d2e64b6897cd91925ad2459d6acf71a174e9
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
<<<<<<< HEAD



	public function hitung(Request $request, Dokter $dokter){
	$dokter = DB::table('dokter')->where('id',$dokter->id)->get();

		// Ambil variabel dari form
	$a = $dokter->jadwal->count();
	$b = $request->harga_obat_sejenis;
	$c = $request->harga_obat_sejenis_resep;
	$e = $request->harga_obat;

	$potensi_peresepan = $a * $b * $c * 4 * $e;
	DB::table('dokter')->where('id',$request->id)->update([
		'potensi' => $potensi_peresepan
	]);

		return view('hasilhitung',compact('potensi_peresepan','dokter'));
=======

	
	public function hitung(Request $request, Dokter $dokter){


		$dokter = DB::table('dokter')->get();
	
	 	// Ambil variabel dari form
	  $a = $dokter->jadwal->count();
	   $b = $request->harga_obat_sejenis;
	   $c = $request->harga_obat_sejenis_resep;
		$e = $request->harga_obat;
	
	   $potensi_peresepan = $a*$b*$c*4*$e;
	   DB::table('dokter')->where('id',$request->id)->update([
	 	'potensi' => $potensi_peresepan
	   ]);
	
	 	return view('hasilhitung',compact('potensi_peresepan','dokter'));


	// public function hitung(Request $request){


	// 	$dokter = DB::table('dokter')->get();

	// 	// Ambil variabel dari form
	// $a = $request->jum_hari_prak;
	// $b = $request->harga_obat_sejenis;
	// $c = $request->harga_obat_sejenis_resep;
	// $d = $request->jumlah_hari_praktek;
	// $e = $request->harga_obat;

	// $potensi_peresepan = $a * $b * $c * $d * $e;
	// DB::table('dokter')->where('id_dokter',$request->id_dokter)->update([
	// 	'potensi' => $potensi_peresepan
	// ]);

	// 	return view('hasilhitung',compact('potensi_peresepan','dokter'));

>>>>>>> 87b1d2e64b6897cd91925ad2459d6acf71a174e9

	}

}
