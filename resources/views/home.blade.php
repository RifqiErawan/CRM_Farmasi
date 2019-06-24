@extends('layouts.dashboard')

@section('sidebar')
<li class="nav-item ">
  <a class="nav-link" href="{{route('admin.dashboard')}}">
    <i class="material-icons">dashboard</i>
    <p>Dashboard</p>
  </a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="#">
    <i class="material-icons">person</i>
    <p>Medical Representative</p>
  </a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="#">
    <i class="material-icons">content_paste</i>
    <p>Kelola Tugas</p>
  </a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="#">
    <i class="material-icons">library_books</i>
    <p>Laporan</p>
  </a>
</li>
<!--  -->
<a class="nav-link active"href="/datadokter">Data Dokter</a>
<a class="nav-link" href="/besarpotensi/home">Input Besar Potensi</a>
<a class="nav-link" href="/klasifikasi">Klasifikasi Dokter</a>
<a href="/produk" class="nav-link">List Produk</a>
<a href="/medrep" class="nav-link">Data Medrep</a>
<a href="/rencanaKunjungan" class="nav-link">Rencana Kunjungan</a>
<a href="/laporanKunjungan" class="nav-link">Laporan Kunjungan</a>
</li>

@endsection



@section('konten')
<h1>Ini Home, Coba / Datadokter</h1>
@endsection
