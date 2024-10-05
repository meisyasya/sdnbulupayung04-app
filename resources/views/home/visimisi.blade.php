@extends('layout.app')

@section('title')
    Visi dan Misi
@endsection

@section('content')

<!-- Breadcrumbs -->
<div class="breadcrumbs py-2">
    <div class="container">
        <div class="d-flex justify-content-between text-white">
            <h2>Visi dan Misi</h2>
            <ol class="d-flex list-unstyled">
                <li>Home</li>
                <li>Visi dan Misi</li>
            </ol>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Visi Misi -->
<div class="about-us mt-5">
    <div class="container text-center">
        <div class="title-container mb-4">
            <h2 class="fw-bold">VISI DAN MISI</h2>
        </div>
        <div class="row justify-content-center">
            <!-- Visi Misi -->
            <div class="col-md-6 mb-4" data-aos="fade-right">
                <h4 class="fw-bold">VISI</h4>
                <h6 class="fw-bold">{{ $visi->deskripsi_1 }}</h6>
                <h4 class="fw-bold mt-4">MISI</h4>
                <ul class="list-group list-group-flush">
                    @foreach ($misis as $misi)
                        <li class="list-group-item">{{ $loop->iteration }}. {{ $misi->description }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-left">
                <img src="{{ asset('storage/photo-user/' . $visi->photo) }}" alt="Visi Image" class="img-fluid rounded mx-auto d-block" style="max-width: 400px;">
              <p class="mb-3">{{ $visi->deskripsi_2 }}</p>
                
            </div>
        </div>
    </div>
</div>
<!-- End Visi Misi -->

{{-- footer --}}
@include('layout.footer')

@endsection
