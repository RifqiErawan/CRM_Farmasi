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
<a href="/datadokter"> Kembali</a>

 <br/>
 <br/>
<a href="/laporanKunjungan/export">Print Laporan Kunjungan</a>
    <body>

                    <table class="table table-border">
                        <thead>
                            <th>Nama Dokter</th>
                            <th>Spesialisasi</th>
                            <th>Kontak</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Catatan </th>
                            <th>Bukti Kunjungan</th>
                        </tr>
                        </thead>
                            @foreach($laporan as $d)
                             <tbody>

                             <tr>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->spesialisasi }}</td>
                                <td>{{ $d->kontak }}</td>
                                <td>{{ $d->tglKunjungan }}</td>
                                <td>{{ $d->catatan}}</td>
                                <td>{{ $d->buktiKunjungan}}</td>
                            </tr>
                            </tbody>
                            @endforeach

                    </table>
    </body>

@endsection
