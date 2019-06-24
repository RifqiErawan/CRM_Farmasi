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

<a href="/produk"> Kembali</a>


<body>
	<h3 align="center">Edit Produk</h3>

	<table class="table table border">
		@foreach($produk as $prd)
		<form action="/produk/editObatAction" method="post">
			 {{ csrf_field() }}
			<tr>
				<td><input type="hidden" name="kodeobat" value="{{$prd->kodeobat}}"></td>
			</tr>
			<tr class="form-group">
				<td>Nama Obat</td>
				<td><input class="form-control" type="text" name="namaobat" value="{{$prd->namaobat}}"></td>
			</tr>
			<tr>
				<td>Aturan Pakai</td>
				<td><textarea class="form-control" name="aturanpakai">{{$prd->aturanpakai}}</textarea></td>
			</tr>
			<tr>
				<td>Cara Kerja Obat</td>
				<td><textarea name="carakerjaobat" class="form-control">{{$prd->carakerjaobat}}</textarea></td>
			</tr>
			<tr>
				<td>Efek Samping</td>
				<td><textarea class="form-control" name="efeksamping">{{$prd->efeksamping}}</textarea></td>
			</tr>
			<tr>
				<td>Indikasi</td>
				<td><textarea name="indikasi" class="form-control">{{$prd->indikasi}}</textarea></td>
			</tr>
			<tr>
				<td>Jenis Obat</td>
				<td><input type="text" name="jenisobat" class="form-control" value="{{$prd->jenisobat}}"></td>
			</tr>
			<tr>
				<td>Komposisi</td>
				<td><textarea class="form-control" name="komposisi">{{$prd->komposisi}}</textarea></td>
			</tr>
			<tr>
				<td>Kontra Indikasi</td>
				<td><textarea name="kontraindikasi" class="form-control">{{$prd->kontraindikasi}}</textarea></td>
			</tr>
			<tr>
				<td>Peringatan Obat</td>
				<td><textarea class="form-control" name="peringatanobat">{{$prd->peringatanobat}}</textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Upload Data" class="btn btn-primary"></td>
			</tr>
			@endforeach
		</form>	
	</table>
	
</body>

@endsection