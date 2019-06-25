<!-- Menghubungkan dengan view template master -->
@extends('layouts.dashboard')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->



<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

<div class="container">
		<div class="card">
			<div class="card-body">
<h3>Pilih Dokter</h3>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Spesialis</th>
			<th>Opsi</th>
		</tr>
		</thead>

		@foreach($dokter as $d)
		<tbody>
		<tr>
			<td>{{ $d->nama }}</td>
			<td>{{ $d->spesialisasi }}</td>
			<td>
			@if (empty($d->potensi))
<<<<<<< HEAD
            <a class="btn btn-primary btn-sm" href="/besarpotensi/input_potensi/{{ $d->id }}">Hitung</a> 
=======
            <a class="btn btn-primary btn-sm" href="/besarpotensi/input_potensi/{{ $d->id }}">Hitung</a>
>>>>>>> a42ed2d73cc471bb80787586a55186deb75d5896
			@endif
		  </td>
		</tr>

		@endforeach
		</tbody>
	</table>


@endsection
