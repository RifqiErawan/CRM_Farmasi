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

	<table align="center" width="60%" class="table table-border">
		@foreach($produk as $prd)
		<tr>
			<td>
			<table align="center" width="60%">
				
			
				<br>{{$prd->namaobat}}
				<br>{{$prd->aturanpakai}}
				<br>{{$prd->carakerjaobat}}
				<br>{{$prd->efeksamping}}
				<br>{{$prd->indikasi}}
				<br>{{$prd->jenisobat}}
				<br>{{$prd->komposisi}}
				<br>{{$prd->kontraindikasi}}
				<br>{{$prd->peringatanobat}}
			</table>
			</td>
			
		</tr>
		@endforeach
	</table>
	<a href="/produk"> Kembali</a>
	
</body>


@endsection