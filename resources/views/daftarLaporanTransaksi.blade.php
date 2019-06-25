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
<a href="/laporanTransaksi/export">Print Laporan Kunjungan</a>
    <body>

                    <table class="table table-border">
                        <thead>
                            <th>Nama Dokter</th>
                            <th>Spesialisasi</th>
                            <th>Tanggal Kunjungan</th>
                            <th>namaobat</th>
                            <th>banyak</th>
                            <th>harga</th>
                        </tr>
                        </thead>
                            @foreach($laporan as $d)
                             <tbody>

                             <tr>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->spesialisasi }}</td>
                                <td>{{ $d->tglKunjungan }}</td>
                                <td>{{ $d->namaObat }}</td>
                                <td>{{ $d->banyak }}</td>
                                <td>{{ $d->harga }}</td>
                            </tr>
                            </tbody>
                            @endforeach

                    </table>
    </body>

@endsection
