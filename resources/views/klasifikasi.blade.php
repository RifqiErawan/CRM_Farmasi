<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->



<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="container">
		<div class="card">
			<div class="card-body">
<h3>Klasifikasi Dokter</h3>
 
	<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Besar Peresepan</th>
			<th>Besar Persentase</th>
		</tr>
		</thead>
	
		@foreach($dokter as $d)
		<tbody>
		<tr>
			<td>{{ $d->nama }}</td>
			<td>{{ $d->potensi }}</td>
			<!-- <td>{{ $d->kontak }}</td> -->
		</tr>
		@endforeach
		</tbody>
	</table>

	<br/>
				
				</div>
		</div>
	</div>

@endsection