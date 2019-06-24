<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\produkModel;

use App\Exports\ProdukExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

//yoga
class Produk extends Controller
{
    public function show(){

    	$produk = produkModel::all();
    	return view('produk',['produk' => $produk]);
    }

    public function addProduk(){
    	return view('addProduk');
    }

    public function addAction(Request $prd){

    	DB::table('produk')->insert([
    		'namaobat' =>$prd->namaobat,
    		'aturanpakai' =>$prd->aturanpakai,
    		'carakerjaobat' =>$prd->carakerjaobat,
    		'efeksamping' =>$prd->efeksamping,
    		'indikasi' =>$prd->indikasi,
    		'jenisobat' =>$prd->jenisobat,
    		'komposisi' =>$prd->komposisi,
    		'kontraindikasi' =>$prd->kontraindikasi,
    		'peringatanobat' =>$prd->peringatanobat
    	]);
    	return redirect('/produk');
    }

    public function detailObat($kodeobat){
    	$produk = DB::table('produk')->where('kodeobat',$kodeobat)->get();

    	return view('detailProduk',['produk'=>$produk]);
    }

    public function editObat($kodeobat){
    	$produk = DB::table('produk')->where('kodeobat',$kodeobat)->get();

    	return view('editProduk',['produk'=>$produk]);
    }

    public function editObatAction(Request $prd){
    	DB::table('produk')->where('kodeobat',$prd->kodeobat)->update([
    		'namaobat' => $prd->namaobat,
    		'aturanpakai' => $prd->aturanpakai,
    		'carakerjaobat' => $prd->carakerjaobat,
    		'efeksamping' => $prd->efeksamping,
    		'indikasi' => $prd->indikasi,
    		'jenisobat' => $prd->jenisobat,
    		'komposisi' => $prd->komposisi,
    		'kontraindikasi' => $prd->kontraindikasi,
    		'peringatanobat' => $prd->peringatanobat
    	]);
    	return redirect('/produk');
    }

    public function deleteObat($kodeobat){
    	DB::table('produk')->where('kodeobat',$kodeobat)->delete();

    	return redirect('/produk');
    }

    public function export(){
        return Excel::download(new ProdukExport,'Produk.xlsx');
    }
}
