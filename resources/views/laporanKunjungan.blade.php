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

<a href="/rencanaKunjungan"> Kembali</a>
 

<a href="/datadokter"> Kembali</a>


 <br/>
 <br/>

    <body>

                    <table class="table table-border">
                            @foreach($dokter as $d)
                            <form action="/rencanaKunjungan/laporanAction" method="post">
                                 {{ csrf_field() }}
                             <tr>
                                 <td><input type="hidden" name="id" value="{{$d->id}}"></td>
                                 <td><input type="hidden" name="nama" value="{{$d->nama}}"></td>
                                 <td><input type="hidden" name="spesialisasi" value="{{$d->spesialisasi}}"></td>
                                 <td><input type="hidden" name="kontak" value="{{$d->kontak}}"></td>
                             </tr>

                            <tr>
                                <td>Nama Dokter</td>
                                <td>{{ $d->nama }}</td>
                            </tr>
                            <tr>
                                <td>Spesialisasi</td>
                                <td>{{ $d->spesialisasi }}</td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td>{{ $d->kontak }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Kunjungan</td>
                                <td><input type="date" name="tglKunjungan"></td>
                            </tr>
                            <tr>
                                <td>Catatan Hasil Kunjungan</td>
                                <td><input type="text" name="catatan"></td>
                            </tr>
                            <tr>
                                <td>Bukti Kunjungan</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
                            </tr>
                            </form>
                            @endforeach

                    </table>
    </body>

@endsection
