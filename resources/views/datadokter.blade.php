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
<h3>Data Dokter</h3>

	<a href="/datadokter/input"> + Tambah Dokter Baru</a>

	<br/>
	<br/>

	<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Spesialis</th>
			<th>Kontak</th>
			<th>Opsi</th>
		</tr>
		</thead>

		@foreach($dokter as $d)
		<tbody>
		<tr>
			<td>{{ $d->nama }}</td>
			<td>{{ $d->spesialisasi }}</td>
			<td>{{ $d->kontak }}</td>
			<td>
            <a class="btn btn-warning btn-sm" href="/datadokter/edit/{{ $d->id }}">Edit</a> |
            <a class="btn btn-danger btn-sm" href="/datadokter/hapus/{{ $d->id }}">Hapus</a> |
            <a class="btn btn-danger btn-sm" href="/jadwaldokter/input/{{ $d->id }}">Jadwal Dokter</a>

			</td>
		</tr>
		@endforeach
		</tbody>
	</table>

	<br/>

				</div>
		</div>
	</div>

@endsection
