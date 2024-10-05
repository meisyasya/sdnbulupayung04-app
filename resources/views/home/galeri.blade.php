@extends('layout.app')

@section('title')
    galeri
@endsection

@section('content')

 <!-- breadcumbs -->
 <div class="breadcumbs py-2">
  <div class="container">
      <div class="d-flex justify-content-between text-white">
          <h2>Galeri</h2>
          <ol class="d-flex list-unstyled">
              <li>Home</li>
              <li>Galeri</li>
          </ol>
      </div>
  </div>
</div>
<!-- end breadcumbs -->


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

  
 {{-- footer --}}
 @include('layout.footer')

@endsection