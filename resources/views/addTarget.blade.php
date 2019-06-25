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

<!DOCTYPE html>
<html>
<head>
	<title>Input Target</title>
</head>
<body>
	<h3 align="center">Input Target</h3>

	<table class="table table border">
		@foreach($medrep as $med)
		<form action="/medrep/addAction" method="post">
	 {{ csrf_field() }}
			<tr class="form-group">
				<td>Target</td>
				<td><input class="form-control" type="text" name="target"></td>
			</tr>
			<tr class="form-group">
				<input type="hidden" name="id" value="{{$med->id}}">
				<input type="hidden" name="name" value="{{$med->name}}">
				<input type="hidden" name="kontak" value="{{$med->kontak}}">
				<input type="hidden" name="email" value="{{$med->email}}">
				<input type="hidden" name="alamat" value="{{$med->alamat}}">
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Submit Data" class="btn btn-primary"></td>
			</tr>
		</form>
		@endforeach
	</table>

</body>
</html>
@endsection
