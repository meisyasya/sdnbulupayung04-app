@extends('layout.app')
@push('css')
   <link rel="stylesheet" href="{{ 'berita/css/custom.css' }}" rel="stylesheet" >
@endpush
@section('title')
    Artikel
@endsection

@section('content')


<!-- breadcumbs -->
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
       
        <!-- Page header with logo and tagline-->
        <div class="about-us mt-5">
            <div class="container">
              <div class="title-container">
                <h2 class="text-center fw-bold">ARTIKEL</h2>
              </div>
        <!-- Page content-->
        <div class="container">
            <div class="row mt-5">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="{{ url('p/'.$latest_post->slug) }}"><img class="card-img-top featured-img" src="{{ asset('storage/back/'.$latest_post->img) }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $latest_post->created_at->format('d-m-Y') }}</div>
                            <h2 class="card-title">{{ $latest_post->title }}</h2>
                            <p class="card-text">{{ Str::limit($latest_post->desc, 70, '....') }}</p>
                            <a class="btn btn-primary" href="{{ url('p/'.$latest_post->slug) }}">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach ($articles as $item)
                            
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card  mb-4">
                                <a href="{{ url('p/'.$item->slug) }}">
                                    <img class="card-img-top post-img" src="{{ asset('storage/back/'.$item->img) }}" alt="Deskripsi gambar" />
                                </a>
                                                                <div class="card-body card-height">
                                    <div class="small text-muted">
                                        {{ $item->created_at->format('d-m-Y') }}  
                                        <br>
                                        {{($item->Category)->name }}
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
                    <!-- Pagination-->
                  
                     <!-- Pagination-->
                    <nav aria-label="Page navigation">
                        <hr class="my-4" />
                        <div class="d-flex justify-content-center">
                            {{ $articles->links() }}
                        </div>
                    </nav>
                </div>
                <!-- Side widgets-->
                @include('layout.side-widgets')
            </div>
        </div>
    </div>
</div>
<!-- Footer-->
{{-- footer --}}
@include('layout.footer') 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('berita/js/script.js')}"></script>
    </body>
</html>
