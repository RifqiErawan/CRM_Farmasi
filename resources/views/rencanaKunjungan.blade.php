<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', '')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="container">
        <div class="card">
            <div class="card-body">
<a href="/"> Kembali</a>
 
 <br/>
 <br/>

    <body>
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Spesialisasi</th>
                                <th>Kontak</th>
                                <th>Potensi</th>
                                <th>Status</th>
                                <th>idJadwal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dokter as $d)
                            <tr>
                                <td>
                                    {{ $d->id }}
                                </td>
                                <td>
                                    {{ $d->nama }}</td>
                                <td>
                                    {{ $d->spesialisasi }}
                                </td>
                                <td>
                                    {{ $d->kontak }}
                                </td>
                                <td>
                                    {{ $d->potensi }}
                                </td>
                                <td>
                                    {{ $d->status }}
                                </td>
                                <td>
                                    {{ $d->idJadwal }}
                                </td>
                                <td>
                                    <a href="/rencanaKunjungan/laporan/{{ $d->id }}" class="btn btn-warning">Buat Laporan</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
    </body>

@endsection
