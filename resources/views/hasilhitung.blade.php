<!-- Menghubungkan dengan view template master -->
@extends('layouts.dashboard')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->



<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

@foreach($dokter as $d)
    TOTAL PERESEPAN {{$d->nama}}
		<span>{{$d->potensi}}</span>
</br>
        @endforeach
@endsection
