@extends('layouts.app')

@section('content')
<div class="content my-5">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card justify-content-center">
          <div class="card-header card-header-primary">
            <center>
              <h4 class="card-title"> <strong>Welcome to Medical Representative App</strong> </h4>
              <p class="card-category">Login to access dashboard</p>
            </center>
          </div>
          <div class="card-body col-md-12 justify-content-center">
            <div class="row justify-content-center p-5">
              <img class="img-fluid" style="max-width: 100px;" src="{{asset('/logo.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
