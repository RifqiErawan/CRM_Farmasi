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

	<table align="center" width="60%" class="table table-border">
		@foreach($produk as $prd)
		<tr>
			<td>
				<br>{{$prd->namaobat}}
				<br>{{$prd->aturanpakai}}
				<br>{{$prd->komposisi}}
			</td>
			<td>
            <a class="btn btn-primary btn-sm" href="/produk/detail/{{ $prd->kodeobat }}">Detail</a> 
          </td>
		</tr>
		@endforeach
	</table>
	<a href="/produk/add" align="right">Tambah Data Produk</a>
</body>


@endsection