@extends('layouts.dashboard')

@section('sidebar')
<!-- <li class="nav-item ">
  <a class="nav-link" href="{{route('admin.dashboard')}}">
    <i class="material-icons">dashboard</i>
    <p>Dashboard</p>
  </a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="./user.html">
    <i class="material-icons">person</i>
    <p>Medical Representative</p>
  </a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="./tables.html">
    <i class="material-icons">content_paste</i>
    <p>Kelola Tugas</p>
  </a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="./typography.html">
    <i class="material-icons">library_books</i>
    <p>Laporan</p>
  </a> -->
</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Admin!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
