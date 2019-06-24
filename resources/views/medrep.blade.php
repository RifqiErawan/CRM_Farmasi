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

 <br/>
 <br/>

<body>
	<h3 align="center">List Medrep</h3>

	<table align="center" width="80%" class="table table-border">

		<tr style="border: 2px">

			<td style="border:2px">
					<tr>
						<th width="20%">No</th>
						<th width="20%">Nama</th>
						<th width="20%">Target</th>
					</tr>
					@foreach($medrep as $med )
					<tr>
						<td>{{$med->id}}</td>
						<td>{{$med->name}}</td>
						<td>
							@if (($med->target)!=null)
							{{$med->target}}
							@else
							<a href="/medrep/addTarget/{{$med->id}}">Input Target</a>
							@endif
						</td>

					</tr>

			</td>

		</tr>
		@endforeach
	</table>
</body>


@endsection
