@extends('layout.app')

@section('title')
    prestasi
@endsection

@section('content')


 <!-- breadcumbs -->
 <div class="breadcumbs py-2">
    <div class="container">
        <div class="d-flex justify-content-between text-white">
            <h2>Daftar Prestasi</h2>
            <ol class="d-flex list-unstyled">
                <li>Home</li>
                <li>Daftar Prestasi</li>
            </ol>
        </div>
    </div>
  </div>
  <!-- end breadcumbs -->



<div class="prestasi-mt-5 bg-light py-5">
    <div class="container">
        <div class="title-container text-center">
            <h2 class="text-center fw-bold">PRESTASI</h2>
        </div>
        <p class="text-center mt-4">
            prestasi kami
        </p>

        <div class="row mt-5 g-4">
            @foreach ($prestasis as $prestasi)
            <div class="col-md-4 d-flex">
                <div class="card border-0 text-center p-4 flex-fill" data-aos="zoom-in">
                    <div class="card-body d-flex flex-column">
                        <div class="card-icon">
                            <img src="{{ asset('storage/photo-user/' . $prestasi->image) }}" class="img-fluid" alt="{{ $prestasi->title }}">
                        </div>
                        <div class="card-title fw-bolder mt-4">{{ $prestasi->title }}</div>
                        <p class="card-description mt-3 flex-grow-1">{{ $prestasi->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

 {{-- footer --}}
 @include('layout.footer')


@endsection