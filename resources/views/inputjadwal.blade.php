<!-- Menghubungkan dengan view template master -->
@extends('layouts.dashboard')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', '')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="container">
		<div class="card">
			<div class="card-body">

<h3>Input Jadwal Dokter</h3>

 <a href="/datadokter"> Kembali</a>

 <br/>
 <br/>
 @foreach($dokter as $d)

 <form action="/jadwaldokter/store/{{$d->id}}" method="post">
 <div class="form-group row">
 {{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $d->id }}">
    <label class="col-sm-2 col-form-label" >Nama Dokter</label>
    <div class="col-sm-10">
         <span>{{$d->nama}}</span>
    </div>
 </div>

 @endforeach

 <div class="form-group row">
    <label class="col-sm-2 col-form-label" >Alamat </label>
         <div class="col-sm-10">
             <input class="form-control" type="text" name="alamat" placeholder="Alamat Praktek" required="required">
        </div>
 </div>

 <div class="form-group row">
    <label class="col-sm-2 col-form-label" >Hari</label>
         <div class="col-sm-10">
             <input class="form-control" type="text" name="hari" placeholder="Hari Praktek" required="required">
        </div>
 </div>

 <div class="form-group row">
    <label class="col-sm-2 col-form-label" >Waktu Buka</label>
         <div class="col-sm-10">
             <input class="form-control" type="time" name="waktu_buka" placeholder="Jam Buka Praktek" required="required">
        </div>
 </div>

 <div class="form-group row">
    <label class="col-sm-2 col-form-label" >Waktu Tutup</label>
         <div class="col-sm-10">
             <input class="form-control" type="time" name="waktu_tutup" placeholder="Jam Tutup Praktek" required="required">
        </div>
 </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" value="Simpan Data" class="btn btn-primary"> Submit</button>
            </div>
        </div>


      </form>

      </div>
      </div>
      </div>


@endsection
