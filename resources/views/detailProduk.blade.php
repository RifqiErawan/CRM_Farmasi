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

 
 <br/>
 <br/>
<body>
	<h3 align="center">Data Produk</h3>

	<table align="center" width="80%" class="table table-border">
		@foreach($produk as $prd)
		<tr>
			
			<td>
			<table align="center" width="80%">
				<tr>
						<td width="20%">Nama Obat </td>
						<td>{{$prd->namaobat}}</td>
				</tr>
				<tr>
						<td width="20%">Dosis Obat </td>
						<td>{{$prd->aturanpakai}}</td>
				</tr>
				<tr>
						<td width="20%">Komposisi Obat </td>
						<td>{{$prd->komposisi}}</td>
				</tr>
				<tr>
						<td width="20%">Efek Samping </td>
						<td>{{$prd->efeksamping}}</td>
				</tr>
				<tr>
						<td width="20%">Indikasi </td>
						<td>{{$prd->indikasi}}</td>
				</tr>
				<tr>
						<td width="20%">Jenis Obat </td>
						<td>{{$prd->jenisobat}}</td>
				</tr>
				<tr>
						<td width="20%">Kontra Indikasi </td>
						<td>{{$prd->kontraindikasi}}</td>
				</tr>
				<tr>
						<td width="20%">Peringatan  </td>
						<td>{{$prd->peringatanobat}}</td>
				</tr>
				<tr>
						<td align="center"><a href="/produk/edit/{{ $prd->kodeobat }}" class="btn btn-warning"> Edit</a></td>
						<td align="center"><a href="/produk/delete/{{ $prd->kodeobat }}" class="btn btn-danger">Delete</a></td>
				</tr>	
			</table>
			</td>
			
		</tr>
		@endforeach
	</table>
	<a href="/produk"> Kembali</a>
	
</body>


@endsection