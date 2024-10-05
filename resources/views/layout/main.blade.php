<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <style>
    .user-panel {
  background-color: #343a40; /* Ganti dengan warna latar belakang sidebar Anda */
}

.user-panel .info b {
  color: white; /* Mengatur warna font menjadi putih */
}

  </style>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">

  {{-- panggil css dinamis per halaman  --}}
  @stack('css')


  {{-- isi konten --}}
  @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center align-items-center">
        <div class="info text-center">
          <b href="#" class="d-block">SDN Bulupayung 04</b>
        </div>
      </div>
      
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel  pb-3 mb-1 d-flex">
          <div class="image">
            {{-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
          </div>
          <div class="info">
            <a href="#" class="d-block"><b><small>Welcome {{ auth()->user()->name }}</small></b></a>
          </div>
        </div>
      

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">



         

          {{-- Dashboard --}}
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          {{-- user --}}
          <li class="nav-item">
            <a href="{{ route('index') }}" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Lihat Website
              </p>
            </a>
          </li>

          {{-- home --}}
          @if (auth()->user()->role == 1)
          <li class="nav-item">
            <a href="{{ route('admin.about') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <span class="badge badge-info right">4</span>
              <p>
                Home
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          

            

            <ul class="nav nav-treeview">


              <li class="nav-item">
                <a href="{{ route('admin.SliderIndex') }} " class="nav-link">
                  <i   class="far fa-circle nav-icon"></i>
                  <p>Data Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.visimisi') }} " class="nav-link">
                  <i   class="far fa-circle nav-icon"></i>
                  <p>Visi dan Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.datasingkat') }} " class="nav-link">
                  <i   class="far fa-circle nav-icon"></i>
                  <p>Data Singkat Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.PrestasiIndex') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prestasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.GaleriIndex') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Galeri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.PrestasiIndex') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.contact') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
            </ul>
          </li>


          @endif
          {{-- end home --}}

          {{-- about --}}
          @if (auth()->user()->role == 1)
          <li class="nav-item">
            <a href="{{ route('admin.about') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <span class="badge badge-info right">4</span>
              <p>
                About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            

            <ul class="nav nav-treeview">


              
              <li class="nav-item">
                <a href="{{ route('admin.visimisi') }} " class="nav-link">
                  <i   class="far fa-circle nav-icon"></i>
                  <p>Visi dan Misi</p>
                </a>
              </li>

           


              <li class="nav-item">
                <a href="{{ route('admin.SarprasIndex') }} " class="nav-link">
                  <i   class="far fa-circle nav-icon"></i>
                  <p>Sarana dan Prasarana</p>
                </a>
              </li>


            

              

              <li class="nav-item">
                <a href="{{ route('admin.GuruIndex') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Guru</p>
                </a>
              </li>

              
             
             
              
             
            </ul>
          </li>

          @endif


          @if (auth()->user()->role == 1)
          {{-- tentang --}}
          <li class="nav-item">
            <a href="{{ route('admin.PrestasiIndex') }}" class="nav-link">
              {{-- <i class="nav-icon fas fa-user"></i> --}}
              <i class="nav-icon fas fa-book"></i>
              <p>
                Prestasi
              </p>
            </a>
          </li>
          @endif
          

          
          {{-- galeri --}}
          @if (auth()->user()->role == 1)
          <li class="nav-item">
            <a href="{{ route('admin.GaleriIndex') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>
          @endif


        
          <li class="nav-item">
            <a href="{{ route('admin.about') }}" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <span class="badge badge-info right">4</span>
              <p>
                Berita
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            

            

            <ul class="nav nav-treeview">


              @if (auth()->user()->role == 1)
              <li class="nav-item">
                <a href="{{ route('admin.CategoryIndex') }}" class="nav-link">
                  <i   class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>  
              @endif


              <li class="nav-item">
                <a href="{{ route('admin.ArticleIndex') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Article</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.UsersIndex') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>

              
             
             
              
             
            </ul>
          </li>




          
         




          {{-- PPDB --}}
          @if (auth()->user()->role == 1)
          <li class="nav-item">
            <a href="{{ route('admin.ppdb') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                PPDB
              </p>
            </a>
          </li>
          @endif


        

          @if (auth()->user()->role == 1)
          <li class="nav-item">
            <a href="{{ route('admin.contact') }}" class="nav-link">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                Contact
              </p>
            </a>
          </li>
          @endif


          {{-- Logout --}}
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">
              <i class="nav-icon fas fa-arrow-left"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

         
         
         
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 @yield('content')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; {{ date('Y') }} <a href="https://adminlte.io">  by PT Cazh Teknologi Inovasi</a>.</strong>

    {{-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div> --}}
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />

<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}""></script>
<!-- ChartJS -->
<script src="{{asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{asset('lte/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{asset('lte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('lte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{asset('lte/plugins/moment/moment.min.js') }}"></script>
<script src="{{asset('lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{asset('lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('lte/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('lte/dist/js/pages/dashboard.js') }}"></script>


  {{-- panggil js dinamis per halaman  --}}
  @stack('js')
{{-- datatable --}}
@yield('scripts')
</body>
</html>
