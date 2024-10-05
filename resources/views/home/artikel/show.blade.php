@extends('layout.app')

@push('css')
   <link rel="stylesheet" href="{{ asset('berita/css/custom.css') }}">
@endpush

@section('title', 'Artikel')

@section('content')

<!-- Breadcrumbs -->
<div class="breadcumbs py-2">
    <div class="container">
        <div class="d-flex justify-content-between text-white">
            <h2>Artikel</h2>
            <ol class="d-flex list-unstyled">
                <li>Home</li>
                <li>Artikel</li>
            </ol>
        </div>
    </div>
</div>

<!-- Page Header -->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Main Content Area -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <a href="{{ url('p/'.$article->slug) }}">
                    <img class="card-img-top featured-img" src="{{ asset('storage/back/'.$article->img) }}" alt="{{ $article->title }}">
                </a>
                <div class="card-body">
                    <div class="small text-muted">{{ $article->created_at->format('d-m-Y') }}</div>
                    <h2 class="card-title">{{ $article->title }}</h2>
                    <p class="card-text">{!! $article->desc !!}</p>
                </div>
            </div>
        </div>
        
        <!-- Sidebar with Search -->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header text-center">
                    <h5>Cari Artikel</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('search') }}" class="d-flex justify-content-between" method='GET'>
                        <div class="input-group">
                            <input class="form-control" name="keyword" type="text" placeholder="Cari Artikel..." value="{{ request('keyword') }}">
                            <button class="btn btn-primary" id="button-search" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="d-flex flex-wrap">
                        @foreach ($categories as $item)
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-primary text-white m-1">{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </div>
                </div>
            </div>
        
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
        
    </div>
</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="{{ asset('berita/js/script.js') }}"></script>

@endsection
