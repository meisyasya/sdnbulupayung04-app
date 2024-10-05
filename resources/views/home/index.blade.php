@extends('layout.app')
<style>
  .about-us .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  


  
  .about-us .col-md-6 {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column; /* Stack items vertically */
  }
  
  .about-us .col-md-6 img {
    margin-bottom: 1rem; /* Space below the image */
  }
  
  .about-us .col-md-6 p {
    text-align: left; /* Ensure text aligns left under the image */
  }
  .card-descript {
    color: #130e0e; /* Warna deskripsi card putih */
}
  /* tentang sekolah */
  .bg-light {
    background-color: #f8f9fa; /* Latar belakang light grey */
}

.custom-card {
    background: linear-gradient(135deg, #00ff48, #aff6a8); /* Gradient biru */
    color: #ffffff; /* Teks putih */
    border-radius: 15px; /* Sudut card membulat */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Bayangan lembut */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animasi transisi */
}

.custom-card:hover {
    transform: translateY(-10px); /* Efek hover */
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3); /* Bayangan lebih dalam */
}

.card-icon i {
    color: #ffffff; /* Warna ikon putih */
}

.card-title {
    color: #ffffff; /* Warna judul card putih */
    font-size: 1.5rem; /* Ukuran font judul */
}

.card-description {
    color: #ffffff; /* Warna deskripsi card putih */
}

.display-3 {
    font-size: 4rem; /* Ukuran font yang lebih besar untuk angka */
    line-height: 1.2; /* Tinggi baris untuk memastikan angka tidak terpotong */
}

</style>
@section('title')
    index
@endsection

@section('content')
    

<div class="content">
      <!-- carousel -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
          @foreach ($sliders as $index => $slider)
            <button type="button" data-bs-target="#carouselExampleCaptions" 
                    data-bs-slide-to="{{ $index }}" 
                    class="{{ $index === 0 ? 'active' : '' }}" 
                    aria-current="{{ $index === 0 ? 'true' : '' }}" 
                    aria-label="Slide {{ $index + 1 }}"></button>
          @endforeach
        </div>
      
        <!-- Carousel Items -->
        <div class="carousel-inner">
          @foreach ($sliders as $index => $slider)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
              <img src="{{ asset('storage/photo-user/' . $slider->image) }}" class="d-block w-100" alt="{{ $slider->title }}">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $slider->title }}</h5>
                <p>{{ $slider->description }}</p>
              </div>
            </div>
          @endforeach
        </div>
      
        <!-- Carousel Controls -->
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


      <!-- Visi Misi -->
      <div class="about-us mt-5">
        <div class="container">
          <div class="title-container">
            <h2 class="text-center fw-bold">VISI DAN MISI</h2>
          </div>
          <div class="row mt-4">
            <!-- visi misi -->
            <div class="col-md-6" data-aos="fade-right">
              <h4 class="fw-bold">VISI</h4>
              <h6 class="fw-bold font-size">{{ $visi->deskripsi_1 }}</h6>
              <h4 class="fw-bold">MISI</h4>
              <ul class="fw-bold list-group list-group-flush">
                
                <ul class="list-group">
                  @foreach ($misis as $misi)
                      <li class="list-group-item">{{ $loop->iteration }}. {{ $misi->description }}</li>
                  @endforeach
              </ul>
              
                
              </ul>
            </div>
            <div class="col-md-6 fw-bold" data-aos="fade-right">
              <img src="{{ asset('storage/photo-user/' . $visi->photo) }}" alt="Visi Image" class="img-fluid rounded mx-auto d-block" style="max-width: 400px;">
              <p class="mb-3">{{ $visi->deskripsi_2 }}</p>
            </div>
          </div>
        </div>
      </div>
      <!-- end visi misi -->



      {{-- data singkat --}}
      <div class="bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="text-center fw-bold">Data Singkat Sekolah</h2>
            </div>
            <p class="text-center mt-4">
                Berikut adalah data singkat mengenai jumlah anggota di sekolah kami.
            </p>
    
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card custom-card text-center p-4">
                        <div class="card-body">
                            <div class="card-icon mb-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="card-title fw-bolder mb-3">Siswa</div>
                            <p class="card-description mb-0">
                                <span class="fw-bolder display-3">{{ $datasingkat->siswa }}</span> orang
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card custom-card text-center p-4">
                        <div class="card-body">
                            <div class="card-icon mb-3">
                                <i class="fa fa-chalkboard-teacher fa-5x"></i>
                            </div>
                            <div class="card-title fw-bolder mb-3">Guru</div>
                            <p class="card-description mb-0">
                                <span class="fw-bolder display-3">{{ $datasingkat->guru }}</span> orang
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card custom-card text-center p-4">
                        <div class="card-body">
                            <div class="card-icon mb-3">
                                <i class="fa fa-cogs fa-5x"></i>
                            </div>
                            <div class="card-title fw-bolder mb-3">Tenaga Kependidikan</div>
                            <p class="card-description mb-0">
                                <span class="fw-bolder display-3">{{ $datasingkat->tenagakependidikan }}</span> orang
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
      {{-- data singkat end --}}
      






      
      
      <!-- prestasi -->
      <div class="prestasi-mt-5 bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="text-center fw-bold">PRESTASI</h2>
            </div>
            <p class="text-center mt-4">
              SDN Bulupayung 04 dengan bangga mengumumkan berbagai prestasi yang telah diraih oleh siswa, guru, dan sekolah. Kami berkomitmen untuk memberikan pendidikan berkualitas tinggi dan lingkungan belajar yang mendukung pencapaian maksimal setiap individu. Berikut adalah beberapa prestasi gemilang kami:            </p>
    
            <div class="row mt-5 g-4">
                @foreach ($prestasis as $prestasi)
                <div class="col-md-4 d-flex">
                    <div class="card border-0 text-center p-4 flex-fill" data-aos="zoom-in">
                        <div class="card-body d-flex flex-column">
                            <div class="card-icon">
                                <img src="{{ asset('storage/photo-user/' . $prestasi->image) }}" class="img-fluid" alt="{{ $prestasi->title }}">
                            </div>
                            <div class="card-title fw-bolder mt-4">{{ $prestasi->title }}</div>
                            <p class="card-descript mt-3 flex-grow-1">{{ $prestasi->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
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
          {{-- <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center">
              <ul class="list-unstyled d-flex galeri-filters">
                <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
                <li data-filter=".filter-p5" class="py-2 px-4">Kegiatan P5</li>
                <li data-filter=".filter-pramuka" class="py-2 px-4">Kegiatan Pramuka</li>
                <li data-filter=".filter-lomba" class="py-2 px-4">Kegiatan Lomba</li>
              </ul>
            </div>
          </div> --}}
          
          <div class="row mt-5">
            <div class="col-md-12">
              <div class="masonry gambar-container mt-4" data-aos="zoom-in-up">

                @foreach ($galeris as $galeri)
                    
                <div class="masonry-item m-1 gambar-item filter-p5"  data-aos="zoom-in-up">
                  <img src="{{ asset('storage/photo-user/' . $galeri->image) }}" class="img-fluid" alt="{{ $galeri->title }}">
                </div>
                @endforeach
               
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
            <h2 class="text-center fw-bold">ARTIKEL</h2>
          </div>
          {{-- <p class="text-center mt-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente qui, voluptate asperiores veritatis a cum soluta maxime consectetur nobis. Quidem, distinctio.
          </p> --}}

          <div class="row mt-5">
            @foreach ($articles as $item)
                
            <div class="col-lg-4 col-md-6">
                <!-- Blog post-->
                <div class="card mb-4">
                    <a href="{{ url('p/'.$item->slug) }}">
                        <img class="card-img-top post-img" src="{{ asset('storage/back/'.$item->img) }}" alt="Deskripsi gambar" />
                    </a>
                    <div class="card-body card-height">
                        <div class="small text-muted">
                            {{ $item->created_at->format('d-m-Y') }}  
                            <br>
                            {{ ($item->Category)->name }}
                        </div>             
                        <h2 class="card-title h4">{{ $item->title }}</h2>
                        <p class="card-text">{{ Str::limit($item->desc, 70, '....') }}</p>
                        <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">Read more →</a>
                    </div>
                </div>
                <!-- Blog post-->
            </div>
        
            @endforeach
        </div>
        

          
        </div>
      </div>

       <!-- end Berita -->
      
      </div>


      {{-- footer --}}
      @include('layout.footer')
      







      
    
    
            
          </div>
        </div>
      </div>
    </div>
    
 
      




      
      @endsection