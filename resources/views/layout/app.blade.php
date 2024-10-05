<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- css milik bootsrap -->
    <link href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- custom css -->
     <link rel="stylesheet" href="/assets/css/style.css">
     <!-- fontawesome -->
      <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
      <!-- aos buat skroll -->
       <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
        {{-- panggil css dinamis per halaman  --}}
      @stack('css')
  </head>
  <body>
<div class="wrapper">
    <!-- navbar -->
    <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top py-3">
  <div class="container">
    {{-- logoo --}}
    <a class="navbar-brand fw-bold" href="#">
      <img src="{{ asset('assets/img/logoPNC.png') }}" alt="Logo" style="height: 40px; margin-right: 8px;">
      <span class="primary">SDN BULUPAYUNG 04</span>
  </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link fw-bolder {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle fw-bolder {{ Request::is('tentangsekolah') || Request::is('visimisi') || Request::is('sarpras') || Request::is('daftarguru') || Request::is('datasiswa') ? 'active' : '' }}" href="{{ route('about') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      About
                  </a>
                  <ul class="dropdown-menu">
                    
                      <li><a class="dropdown-item {{ Request::is('visimisi') ? 'active' : '' }}" href="{{ route('visimisi') }}">Visi dan Misi</a></li>
                      <li><a class="dropdown-item {{ Request::routeIs('sarpras') ? 'active' : '' }}" href="{{ route('sarpras') }}">Sarana dan Prasarana</a></li>
                      <li><a class="dropdown-item {{ Request::is('daftarguru') ? 'active' : '' }}" href="{{ route('daftarguru') }}">Data Guru</a></li>
                                        </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link fw-bolder {{ Request::is('prestasi') ? 'active' : '' }}" href="{{ route('prestasi') }}">Prestasi</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fw-bold {{ Request::is('galeri') ? 'active' : '' }}" href="{{ route('galeri') }}">Galeri</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fw-bold {{ Request::is('berita') ? 'active' : '' }}" href="{{ route('berita') }}">Artikel</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fw-bold {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>    
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold {{ Request::is('kontakkami') ? 'active' : '' }}" href="{{ route('ppdb') }}">PPDB</a>
            </li>
          </ul>
      </div>
  </div>
</nav>
<!-- end navbar -->

      <!-- end navbar -->



      @yield('content')

       </div>
      
       <!-- footer -->
       
      <!-- Footer -->
      <!-- FOOTER -->
    

  <!-- To Top Button -->
  <a href="#" class="btn-to-top">
    <i class="fa fa-chevron-up"></i>
  </a>

  <!-- Spacing div to ensure content isn't hidden behind the footer -->
  <div class="vh-50"></div>


  <script>
    window.addEventListener('scroll', function() {
      const btnToTop = document.querySelector('.btn-to-top');
      if (window.scrollY > 200) { // Adjust the scroll threshold as needed
        document.body.classList.add('scrolled');
      } else {
        document.body.classList.remove('scrolled');
      }
    });
  </script>

    <script src="/assets/vendor/jquery/jquery-3.7.1.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/assets/vendor/fontawesome/js/all.min.js"></script>
    <!-- masonry buat gambar -->
    <script src="/assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <!-- <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/isotope/3.0.6/isotope.pkgd.min.js"></script>

    <script src="/assets/js/app.js"></script>
    <!-- aos buat skroll -->
     <script src="/assets/vendor/aos/dist/aos.js"></script>
     <script>
      AOS.init();
    </script>
  </body>
</html>































     