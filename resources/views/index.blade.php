<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Profil Sekolah | @yield('title')
    @yield('title') | Profil Sekolah 

  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('template/dashboard/assets/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/datepicker.min.css') }}">
  <link href='https://unpkg.com/boxicons@1.7.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Profil Sekolah
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <p>Data Siswa</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="{{route('kelas.index')}}">
             <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <p>Data Kelas</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ route('guru.index') }}">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <p>Data Guru</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ route('staff.index') }}">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <p>Data Staff</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ route('acara.index') }}">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <p>Data Acara</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <p>Data Pengumuman</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <p>Data Prestasi</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('template/dashboard/assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('template/dashboard/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('template/dashboard/assets/js/core/bootstrap-material-design.min.js') }}"></script>
  <script src="{{ asset('template/dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('template/dashboard/assets/js/plugins/chartist.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('template/dasboard/assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('template/dashboard/assets/js/material-dashboard.min.js?v=2.1.0') }}"></script>
  <script src="{{ asset('js/datepicker.min.js') }}"></script>
  <script src="{{ asset('js/datepicker.en.js') }}"></script>
</body>

</html>
