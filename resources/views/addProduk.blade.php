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

<a href="/produk"> Kembali</a>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Produk</title>
</head>
<body>
	<h3 align="center">Tambah Data Produk</h3>

	<table class="table table border">
		<form action="/produk/addAction" method="post">
	 {{ csrf_field() }}
			<tr class="form-group">
				<td>Nama Obat</td>
				<td><input class="form-control" type="text" name="namaobat"></td>
			</tr>
			<tr>
				<td>Aturan Pakai</td>
				<td><textarea class="form-control" name="aturanpakai"></textarea></td>
			</tr>
			<tr>
				<td>Cara Kerja Obat</td>
				<td><textarea name="carakerjaobat" class="form-control"></textarea></td>
			</tr>
			<tr>
				<td>Efek Samping</td>
				<td><textarea class="form-control" name="efeksamping"></textarea></td>
			</tr>
			<tr>
				<td>Indikasi</td>
				<td><textarea name="indikasi" class="form-control"></textarea></td>
			</tr>
			<tr>
				<td>Jenis Obat</td>
				<td><input type="text" name="jenisobat" class="form-control"></td>
			</tr>
			<tr>
				<td>Komposisi</td>
				<td><textarea class="form-control" name="komposisi"></textarea></td>
			</tr>
			<tr>
				<td>Kontra Indikasi</td>
				<td><textarea name="kontraindikasi" class="form-control"></textarea></td>
			</tr>
			<tr>
				<td>Peringatan Obat</td>
				<td><textarea class="form-control" name="peringatanobat"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Submit Data" class="btn btn-primary"></td>
			</tr>
		</form>
	</table>

</body>
</html>
@endsection
