@extends('layout.app')

@section('title')
    daftarguru
@endsection

@section('content')

      <!-- breadcumbs -->
      <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between text-white">
                <h2>Daftar Guru</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Daftar Guru</li>
                </ol>
            </div>
        </div>
      </div>
      <!-- end breadcumbs -->

  


      <!-- Data Guru -->
      <div class="dguru-mt-5 bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="text-center fw-bold">DATA GURU</h2>
            </div>
            <p class="text-center mt-4">
                Guru-guru di SDN Bulupayung 04 adalah tenaga pendidik yang berpengalaman dan berdedikasi, berkomitmen untuk menciptakan lingkungan belajar yang inspiratif dan inklusif            </p>
            <div class="row mt-5">
                @foreach ($gurus as $guru)
                    <div class="col-md-4 mb-4" data-aos="fade-up">
                        <div class="card" style="width: 100%;">
                            <img src="{{ asset('storage/photo-user/' . $guru->image) }}" class="card-img-top" alt="{{ $guru->title }}">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">{{ $guru->title }}</h5>
                                <p class="card-text text-muted">{{ $guru->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
      
      
      <!-- end Data Guru -->
 {{-- footer --}}
 @include('layout.footer')
      @endsection

















