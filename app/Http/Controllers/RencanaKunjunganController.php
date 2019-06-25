<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RencanaKunjungan;
class RencanaKunjunganController extends Controller
{
    public function index()
    {
    	$rencanaKunjungan = rencanaKunjungan::all();
    	return view('rencanaKunjungan', ['dokter' => $rencanaKunjungan]);
    }

    public function laporan($id)
	{
   		$rencanaKunjungan = DB::table('dokter')->where('id',$id)->get();
   		return view('laporanKunjungan', ['dokter' => $rencanaKunjungan]);
	}
	public function laporanAction(Request $lap)
	{
		DB::table('table_laporan_kunjungan')->insert([
    		'nama' =>$lap->nama,
    		'spesialisasi' =>$lap->spesialisasi,
    		'kontak' =>$lap->kontak,
    		'tglKunjungan' =>$lap->tglKunjungan,
    		'catatan' =>$lap->catatan,
    		'buktiKunjungan' =>''
    	]);
    	return redirect('/rencanaKunjungan');
	}

	public function transaksi($id)
	{
   		$rencanaKunjungan = DB::table('dokter')->where('id',$id)->get();
   		return view('laporanTransaksi', ['dokter' => $rencanaKunjungan]);
	}
	public function transaksiAction(Request $transaksi)
	{
		DB::table('datatransaksi')->insert([
    		'nama' =>$transaksi->nama,
    		'spesialisasi' =>$transaksi->spesialisasi,
    		'tglKunjungan' =>$transaksi->tglKunjungan,
    		'namaObat' =>$transaksi->namaObat,
    		'banyak' =>$transaksi->banyak,
    		'harga' =>$transaksi->harga
    	]);
    	return redirect('/rencanaKunjungan');
	}
}

