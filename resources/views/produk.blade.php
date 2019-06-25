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
	<h3 align="center">List Produk</h3>

	<a href="/produk/export_excel" class="btn btn-succes">Export Data</a>

	<table align="center" width="80%" class="table table-border">
		@foreach($produk as $prd )
		<tr>	
			
			<td style="border:2px">
				<table width="80%" align="center">
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
						<td colspan="2" align="center"><a align="right" class="btn btn-primary btn-sm" href="/produk/detail/{{ $prd->kodeobat }}">Detail</a></td>
					</tr>
				</table>
				
				   
			</td>
			
		</tr>
		@endforeach
	</table>
	<a href="/produk/add" align="right">Tambah Data Produk</a>
</body>


@endsection