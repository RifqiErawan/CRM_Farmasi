<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//default route
Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::prefix('datadokter')->group(function(){
  Route::get('/','DatadokterController@home');
  Route::get('/input','DatadokterController@input');
  Route::post('/store','DatadokterController@store');
  Route::get('/edit/{id}','DatadokterController@edit');
  Route::post('/update','DatadokterController@update');
  Route::get('/hapus/{id}','DatadokterController@hapus');
});

Route::prefix('besarpotensi')->group(function(){
  Route::get('/home','BesarPotensiController@home');
  Route::post('/store','BesarPotensiController@store');
  Route::get('/input_potensi/{id}','BesarPotensiController@input_potensi');
  Route::post('/hitung','BesarPotensiController@hitung');
});

Route::prefix('produk')->group(function(){
  Route::get('/add','Produk@addProduk');
  Route::post('/addAction','Produk@addAction');
  Route::get('/detail/{kode}','Produk@detailObat');
  Route::get('/edit/{kode}','Produk@editObat');
  Route::post('/editObatAction','Produk@editObatAction');
  Route::get('/delete/{kode}','Produk@deleteObat');
  Route::get('/','Produk@show');
});

Route::get('/medrep','MedRepController@show');
Route::get('/medrep/addTarget/{kode}','MedRepController@inputTarget');
Route::post('/medrep/addAction','MedRepController@addAction');

Route::get('/klasifikasi','KlasifikasiController@home');
Route::get('/jadwaldokter/input/{id}','JadwalDokterController@inputjadwal');
Route::post('/jadwaldokter/store/{dokter}','JadwalDokterController@store');

Route::get('/rencanaKunjungan', 'RencanaKunjunganController@index');
Route::get('/rencanaKunjungan/laporan/{id}', 'RencanaKunjunganController@laporan');
Route::post('/rencanaKunjungan/laporanAction','RencanaKunjunganController@laporanAction');
Route::get('/rencanaKunjungan/transaksi/{id}', 'RencanaKunjunganController@transaksi');
Route::post('/rencanaKunjungan/transaksiAction','RencanaKunjunganController@transaksiAction');


Route::get('/produk/export_excel','Produk@export');

Route::get('/laporanKunjungan','laporanController@laporanKunjungan');
Route::get('/laporanKunjungan/export','laporanController@exportKunjungan');

