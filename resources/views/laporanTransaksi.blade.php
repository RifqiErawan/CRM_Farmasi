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
<a href="/rencanaKunjungan"> Kembali</a>
 
 <br/>
 <br/>

    <body>

                    <table class="table table-border">
                            @foreach($dokter as $d)
                            <form action="/rencanaKunjungan/transaksiAction" method="post">
                                 {{ csrf_field() }}
                             <tr>
                                 <td><input type="hidden" name="id" value="{{$d->id}}"></td>
                                 <td><input type="hidden" name="nama" value="{{$d->nama}}"></td>
                                 <td><input type="hidden" name="spesialisasi" value="{{$d->spesialisasi}}"></td>
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
                                <td>Tanggal Kunjungan</td>
                                <td><input type="date" name="tglKunjungan"></td>
                            </tr>
                            <tr>
                                <td>Nama Obat</td>
                                <td><input type="string" name="namaObat"></td>
                            </tr>
                            <tr>
                                <td>Banyak</td>
                                <td><input type="integer" name="banyak"></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><input type="integer" name="harga"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
                            </tr>
                            </form>
                            @endforeach
                        
                    </table>
    </body>

@endsection