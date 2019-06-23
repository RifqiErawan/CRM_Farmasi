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

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Produk</title>
</head>
<body>
	<h3 align="center">Tambah Data Produk</h3>

	<table>
		<form action="/produk/addAction" method="post">
	 {{ csrf_field() }}
			<tr>
				<td>Nama Obat</td>
				<td><input type="text" name="namaobat"></td>
			</tr>
			<tr>
				<td>Aturan Pakai</td>
				<td><textarea name="aturanpakai"></textarea></td>
			</tr>
			<tr>
				<td>Cara Kerja Obat</td>
				<td><textarea name="carakerjaobat"></textarea></td>
			</tr>
			<tr>
				<td>Efek Samping</td>
				<td><textarea name="efeksamping"></textarea></td>
			</tr>
			<tr>
				<td>Indikasi</td>
				<td><textarea name="indikasi"></textarea></td>
			</tr>
			<tr>
				<td>Jenis Obat</td>
				<td><input type="text" name="jenisobat"></td>
			</tr>
			<tr>
				<td>Komposisi</td>
				<td><textarea name="komposisi"></textarea></td>
			</tr>
			<tr>
				<td>Kontra Indikasi</td>
				<td><textarea name="kontraindikasi"></textarea></td>
			</tr>
			<tr>
				<td>Peringatan Obat</td>
				<td><textarea name="peringatanobat"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Submit Data"></td>
			</tr>
		</form>	
	</table>
	
</body>
</html>
@endsection