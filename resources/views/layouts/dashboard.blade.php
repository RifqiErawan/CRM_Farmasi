<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Farmasi @yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Material Dashboard CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/material-dashboard.css')}}">

  </head>
  <body>
		<div class="wrapper ">
	    <div class="sidebar" data-color="danger" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
	      <div class="logo">
	        <a href="{{route('admin.dashboard')}}" class="simple-text logo-normal">
	          Farmasi
	        </a>
	      </div>

	      <div class="sidebar-wrapper">
	        <ul class="nav">
            @if(Auth::user('admin'))
            <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('admin.dashboard')}}">
                <p>Dashboard</p>
              </a>
            </li>
            @else
            <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('admin.dashboard')}}">
                <p>Dashboard</p>
              </a>
            </li>
            @endif
            <!--  -->
            <li class="nav-item {{ Request::is('datadokter') ? 'active' : '' }} ">
              <a class="nav-link "href="/datadokter">Data Dokter</a>
            </li>
            <li class="nav-item {{ Request::is('besarpotensi/home') ? 'active' : '' }}">
              <a class="nav-link" href="/besarpotensi/home">Input Besar Potensi</a>
            </li>
            <li class="nav-item {{ Request::is('klasifikasi') ? 'active' : '' }}">
              <a class="nav-link" href="/klasifikasi">Klasifikasi Dokter</a>
            </li>
            <li class="nav-item {{ Request::is('produk') ? 'active' : '' }}">
              <a href="/produk" class="nav-link">List Produk</a>
            </li>
            <li class="nav-item {{ Request::is('medrep') ? 'active' : '' }}">
              <a href="/medrep" class="nav-link">Data Medrep</a>
            </li>
            <li class="nav-item {{ Request::is('rencanaKunjungan') ? 'active' : '' }}">
              <a href="/rencanaKunjungan" class="nav-link">Rencana Kunjungan</a>
            </li>
            <li class="nav-item {{ Request::is('laporanKunjungan') ? 'active' : '' }}">
              <a href="/laporanKunjungan" class="nav-link">Laporan Kunjungan</a>
            </li>
            <li>
              <a href="/laporanTransaksi" class="nav-link">Laporan Transaksi</a>
            </li>
            </li>
	          @yield('sidebar')
	        </ul>
	      </div>
	    </div>


	    <div class="main-panel">
	      <!-- Navbar -->
	      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
	        <div class="container-fluid">
	          <div class="navbar-wrapper">
              @if($user = Auth::user())
                <span class="navbar-brand">Hello, {{ Auth::user()->name }} !</span>
              @else
                <span class="navbar-brand">Hello, Guest !</span>
              @endif
	          </div>
	          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="navbar-toggler-icon icon-bar"></span>
	            <span class="navbar-toggler-icon icon-bar"></span>
	            <span class="navbar-toggler-icon icon-bar"></span>
	          </button>
            @if($user = Auth::user())
	          <div class="collapse navbar-collapse justify-content-end">
	            <ul class="navbar-nav">
	              <li class="nav-item dropdown">
	                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  <i class="material-icons">person</i>
	                  <p class="d-lg-none d-md-block">
	                    Account
	                  </p>
	                </a>
	                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <div class="dropdown-divider"></div>

                    @auth('admin')
                    <a class="dropdown-item" href="{{ route('admin.logout') }}">
                        Sign Out from Admin
                    </a>
                    @endauth

                    @auth('web')
                    <a class="dropdown-item" href="{{ route('user.logout') }}">
                        Sign Out
                    </a>
                    @endauth

	                </div>
	              </li>
	            </ul>
	          </div>
            @else
              <a href="{{route('login')}}"></a>
            @endif
	        </div>
	      </nav>
	      <!-- End Navbar -->
	      <div class="content">
	        <div class="container-fluid">
	          @yield('content')
	        </div>
	      </div>
	      <footer class="footer">
	        <div class="container-fluid">
	          <nav class="float-left">
	            <ul>
	              <li>
	                <a href="https://www.creative-tim.com/license">
	                  Licenses
	                </a>
	              </li>
	            </ul>
	          </nav>
	          <div class="copyright float-right">
	            &copy;
	            <script>
	              document.write(new Date().getFullYear())
	            </script>, made with <i class="material-icons">favorite</i> in Ciwaruga, template by Creative Tim. - JTK 2019
	          </div>
	        </div>
	      </footer>
	    </div>
	  </div>

  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>

  <!-- Plugin for the Perfect Scrollbar -->
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

  <!-- Plugin for the momentJs  -->
  <script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>

  <!--  Plugin for Sweet Alert -->
  <script src="{{asset('assets/js/plugins/sweetalert2.js')}}"></script>

  <!-- Forms Validations Plugin -->
  <script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>

  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>

  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}" ></script>

  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>

  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="{{asset('assets/js/plugins/jquery.datatables.min.js')}}"></script>

  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>

  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{asset('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>

  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>

  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('assets/js/plugins/nouislider.min.js')}}" ></script>

  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js')}}"></script>

  <!-- Library for adding dinamically elements -->
  <script src="{{asset('assets/js/plugins/arrive.min.js')}}"></script>

  <!--  Google Maps Plugin    -->
  <script  src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <!-- Chartist JS -->
  <script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>

  <!--  Notifications Plugin    -->
  <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>

  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/material-dashboard.min.js?v=2.1.1')}}" type="text/javascript"></script>

  </body>
</html>
