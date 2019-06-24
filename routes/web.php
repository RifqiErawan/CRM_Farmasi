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
    return view('master');
});

//route saya
Route::get('/datadokter','DatadokterController@home');
Route::get('/datadokter/input','DatadokterController@input');
Route::post('/datadokter/store','DatadokterController@store');
Route::get('/datadokter/edit/{id}','DatadokterController@edit');
Route::post('/datadokter/update','DatadokterController@update');
Route::get('/datadokter/hapus/{id}','DatadokterController@hapus');
Route::get('/besarpotensi/home','BesarPotensiController@home');
Route::post('/besarpotensi/store','BesarPotensiController@store');
Route::get('/besarpotensi/input_potensi/{id}','BesarPotensiController@input_potensi');
Route::get('/produk','Produk@show');
Route::get('/produk/add','Produk@addProduk');
Route::post('/produk/addAction','Produk@addAction');
Route::get('/produk/detail/{kode}','Produk@detailObat');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('/produk/edit/{kode}','Produk@editObat');
Route::post('/produk/editObatAction','Produk@editObatAction');
Route::get('/produk/delete/{kode}','Produk@deleteObat');

Route::get('/rencanaKunjungan', 'RencanaKunjunganController@index');
Route::get('/rencanaKunjungan/laporan/{id}', 'RencanaKunjunganController@laporan');
Route::post('/rencanaKunjungan/laporanAction','RencanaKunjunganController@laporanAction');
