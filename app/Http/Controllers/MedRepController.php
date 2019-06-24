<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedRepController extends Controller
{
    //
    public function show(){

    	$medrep = DB::table('users')->get();

    	return view('medrep',['medrep' => $medrep]);
    }

    public function inputTarget($id){
    	$medrep = DB::table('users')->where('id',$id)->get();
    	return view('addTarget',['medrep'=>$medrep]);
    }
    public function addAction(Request $med){

    	DB::table('users')->where('id', $med->id)->
  			update([
    		'target' =>$med->target
    	]);
    	return redirect('/medrep');
    }
}
