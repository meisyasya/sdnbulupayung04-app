<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sdnbulupayung04  </title>

    <!-- css milik bootsrap -->
    <link href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- custom css -->
     <link rel="stylesheet" href="/assets/css/style.css">
     <!-- fontawesome -->
      <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
      <!-- aos buat skroll -->
       <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  </head>
  <body>
<div class="wrapper">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top py-3">
        <div class="container">
          <a class="navbar-brand fw-bold" href="#"><span class="primary">SDN BULUPAYUNG 04</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              
              <li class="nav-item">
                <a class="nav-link active fw-bolder" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-bolder" href="{{ route('about') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="tentangsekolah">Tentang Sekolah</a></li>
                  <li><a class="dropdown-item" href="visimisi">Visi dan Misi</a></li>
                  <li><a class="dropdown-item" href="sarpras">Sarana dan Prasarana</a></li>
                  <li><a class="dropdown-item" href="{{ route('daftarguru') }}">Data Guru</a></li>
                  <li><a class="dropdown-item" href="{{ route('daftarguru') }}">Data Siswa</a></li>
                </ul>
              </li>
              <li class="nav-item fw-bolder">
                <a class="nav-link" href="{{ route('daftarguru') }}">Prestasi</a>
              </li>
              <li class="nav-item fw-bold">
                <a class="nav-link" href="">Galeri</a>
              </li>
              <li class="nav-item fw-bold">
                <a class="nav-link" href="berita">Berita</a>
              </li>
              <li class="nav-item fw-bold">
                <a class="nav-link" href="kontakkami">Kontak Kami</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- end navbar -->


<div class="content">
      <!-- carousel -->
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/img/pic1.jpg" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/assets/img/pic2.jpg" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/assets/img/pic1.jpg" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- end carousel -->


      <!-- About -->
       <div class="about-us mt-5">
        <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold ">ABOUT US</h2>
        </div>
          <div class="row mt-4">
            <!-- tambhkan aos -->
            <div class="col-md-6" data-aos="fade-right">
              <h3 class="fw-bold about-us-title">
                Lorem ipsum, dolor sit amet cons
              </h3>
              <p class="fw-bold mt-4 about-us-subtitle">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente qui, voluptate asperiores veritatis a cum soluta maxime consectetur nobis. Quidem, distinctio.
              </p>
             
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <p >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente qui, voluptate asperiores veritatis a cum soluta maxime consectetur nobis. Quidem, distinctio.
              </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-solid fa-check-double "></i> Lorem ipsum dolor sit amet</li>
                <li class="list-group-item"><i class="fa-solid fa-check-double"></i> Lorem ipsum dolor sit amet</li>
                <li class="list-group-item"><i class="fa-solid fa-check-double"></i> Lorem ipsum dolor sit amet</li>
                <li class="list-group-item"><i class="fa-solid fa-check-double"></i> Lorem ipsum dolor sit amet</li>
              </ul>
              <p class="mb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente qui, voluptate asperiores veritatis a cum soluta maxime consectetur nobis. Quidem, distinctio.
              </p>
              <p>
                  
              </p>
            </div>
          </div>
        </div>
      
      </div>
      
      <!-- end about us -->
      
      
      
      <!-- prestasi -->
      <div class="prestasi-mt-5 bg-light py-5">
        <div class="container">
          <div class="title-container text-center">
            <h2 class="text-center fw-bold">PRESTASI</h2>
          </div>
          <p class="text-center mt-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente qui, voluptate asperiores veritatis a cum soluta maxime consectetur nobis. Quidem, distinctio.
          </p>

          <div class="row mt-5">
            <div class="col-md-4">
              <div class="card border-0 text-center p-4 " data-aos="zoom-in">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card border-0 text-center p-4" data-aos="zoom-in">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card border-0 text-center p-4" data-aos="zoom-in">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-4">
              <div class="card border-0 text-center p-4  "  data-aos="zoom-in">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card border-0 text-center p-4" data-aos="zoom-in">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card border-0 text-center p-4" data-aos="zoom-in">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end prestasi -->
      
      <!-- galeri -->
      <div class="about-us mt-5">
        <div class="container">
          <div class="title-container">
            <h2 class="text-center fw-bold">GALERI</h2>
          </div>
          <!-- buat filter -->
          <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center">
              <ul class="list-unstyled d-flex galeri-filters">
                <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
                <li data-filter=".filter-p5" class="py-2 px-4">Kegiatan P5</li>
                <li data-filter=".filter-pramuka" class="py-2 px-4">Kegiatan Pramuka</li>
                <li data-filter=".filter-lomba" class="py-2 px-4">Kegiatan Lomba</li>
              </ul>
            </div>
          </div>
          
          <div class="row mt-5">
            <div class="col-md-12">
              <div class="masonry gambar-container mt-4" data-aos="zoom-in-up">
                <div class="masonry-item m-1 gambar-item filter-p5"  data-aos="zoom-in-up">
                  <img src="/assets/img/pic1.jpg" alt="" class="img-fluid" />
                </div>
                <div class="masonry-item m-1 gambar-item filter-p5" data-aos="zoom-in-up">
                  <img src="/assets/img/pic2.jpg" alt="" class="img-fluid" />
                </div>
                <div class="masonry-item m-1 gambar-item filter-p5" data-aos="zoom-in-up">
                  <img src="/assets/img/c1.jpg" alt="" class="img-fluid" />
                </div>
                <div class="masonry-item m-1 gambar-item filter-lomba" data-aos="zoom-in-up">
                  <img src="/assets/img/c2.png" alt="" class="img-fluid" />
                </div>
                <div class="masonry-item m-1 gambar-item filter-lomba" data-aos="zoom-in-up">
                  <img src="/assets/img/c3.png" alt="" class="img-fluid" />
                </div>
                <div class="masonry-item m-1 gambar-item filter-lomba" data-aos="zoom-in-up">
                  <img src="/assets/img/c4.jpg" alt="" class="img-fluid" />
                </div>
                <div class="masonry-item m-1 gambar-item filter-lomba" data-aos="zoom-in-up">
                  <img src="/assets/img/c5.jpg" alt="" class="img-fluid" />
                </div>
                <div class="masonry-item m-1 gambar-item filter-pramuka" data-aos="zoom-in-up">
                  <img src="/assets/img/c6.png" alt="" class="img-fluid" />
                </div>
                <div class="masonry-item m-1 gambar-item filter-pramuka" data-aos="zoom-in-up">
                  <img src="/assets/img/c7.jpg" alt="" class="img-fluid" />
                </div>
                <div class="masonry-item m-1 gambar-item filter-pramuka" data-aos="zoom-in-up">
                  <img src="/assets/img/c8.jpg" alt="" class="img-fluid" />
                </div>
                <div class="masonry-item m-1 gambar-item filter-p5" data-aos="zoom-in-up">
                  <img src="/assets/img/c9.jpg" alt="" class="img-fluid" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- end galeri -->

      <!-- Berita -->
      <div class="berita-mt-5 bg-light py-5">
        <div class="container">
          <div class="title-container text-center">
            <h2 class="text-center fw-bold">BERITA</h2>
          </div>
          <p class="text-center mt-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente qui, voluptate asperiores veritatis a cum soluta maxime consectetur nobis. Quidem, distinctio.
          </p>

          <div class="row mt-5">
            <div class="col-md-4">
              <div class="card border-0 text-center p-4">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card border-0 text-center p-4">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card border-0 text-center p-4">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-4">
              <div class="card border-0 text-center p-4 ">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card border-0 text-center p-4">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card border-0 text-center p-4">
                <div class="card-body">
                  <div class="card-icon">
                    <i class="fa fa-book fa-lg fa-3x"></i>
                  </div>
                  <div class="card-title fw-bolder mt-4">Lorem Ipsum</div>
                  <p class="card-description mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi obcaecati similique quis assumenda esse placeat hic odit totam, vitae aliquid voluptate, nostrum rem exercitationem fuga accusamus, alias ipsum veritatis rerum deleniti nesciunt? Nesciunt nulla quis inventore quam eum cupiditate?</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

       <!-- end Berita -->
      
      </div>
      
       <!-- footer -->
       
       <footer>
        <div class="footer-top">
          <div class="footer mt-5 bg-light-gray text-white p-5">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
                  <h2 class="fw-bold">KONTAK KAMI</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente qui, voluptate asperiores veritatis a cum soluta maxime consectetur nobis. Quidem, distinctio.
                  </p>
                  <strong>Phone</strong>: <span>088232649021</span><br>
                  <strong>Email</strong>: <span>meisyaa480@gmail.com</span>
                </div>
      
                <div class="col-md-5">
                  <h2 class="fw-bold">Useful Links</h2>
                  <ul class="list-group list-unstyled">
                    <li>
                      <a href="" class="text-decoration-none">
                        <i class="fa fa-chevron-right"></i> Home
                      </a>
                    </li>
                    <li>
                      <a href="" class="text-decoration-none">
                        <i class="fa fa-chevron-right"></i> About
                      </a>
                    </li>
                    <li>
                      <a href="" class="text-decoration-none">
                        <i class="fa fa-chevron-right"></i> Prestasi
                      </a>
                    </li>
                    <li>
                      <a href="" class="text-decoration-none">
                        <i class="fa fa-chevron-right"></i> Galeri
                      </a>
                    </li>
                    <li>
                      <a href="" class="text-decoration-none">
                        <i class="fa fa-chevron-right"></i> Berita
                      </a>
                    </li>
                    <li>
                      <a href="" class="text-decoration-none">
                        <i class="fa fa-chevron-right"></i> Kontak Kami
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <div class="footer-bottom bg-dark text-white py-4">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <div class="copyright">
                  &copy; Copyright <strong>sdnbulupayung04</strong>. All Rights Reserved
                </div>
                <div class="credits">
                  Designed By Meisya
                </div>
                <div class="credits">
                  PT Cazh Teknologi Inovasi
                </div>
              </div>
                <div class="col-md-5">
                  <div class="social-links float-end">
                    <a href="" class="mx-2">
                      <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="" class="mx-2">
                      <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="" class="mx-2">
                      <i class="fab fa-youtube fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            
          </div>
        </div>
      </footer>
      
      
        
        <!-- end footer -->
     
        <!-- to top -->
         <a href="" class="btn-to-top p-3">
          <i class="fa fa-chevron-up"></i>
         </a>
        <!-- end to top -->
      
      <div class="vh-50"></div>

       

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