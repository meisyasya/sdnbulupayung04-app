@extends('layout.app')

<style>
  .img-uniform {
    .img-container {
    width: 100%;
    height: 250px; /* Set the height of the container */
    overflow: hidden; /* Ensures that any overflow from large images is hidden */
}

.img-uniform {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image fits within the container without distortion */
}

}

</style>

@section('title')
    daftarguru
@endsection

@section('content')

      <!-- breadcumbs -->
      <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between text-white">
                <h2>Daftar Sarana Prasarana</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Daftar Sarana Prasarana</li>
                </ol>
            </div>
        </div>
      </div>
      <!-- end breadcumbs -->

  


      <!-- Data Guru -->
      <div class="dguru-mt-5 bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="text-center fw-bold">DATA SARANA DAN PRASARANA</h2>
            </div>
            <p class="text-center mt-4">
                Sarana dan Prasarana Kami
            <div class="row mt-5">
              @foreach ($sarprass as $sarpras) 
              <div class="col-md-4 mb-4" data-aos="fade-up">
                  <div class="card mb-3" style="width: 100%;">
                      <div class="row g-0">
                          <div class="col-md-4 img-container">
                              <img src="{{ asset('storage/photo-sarpras/' . $sarpras->image) }}" 
                                   class="img-fluid rounded-start img-uniform" 
                                   alt="{{ $sarpras->title }}">
                          </div>
                          <div class="col-md-8">
                              <div class="card-body">
                                  <h5 class="card-title">{{ $sarpras->title }}</h5>
                                  <p class="card-text">{{ $sarpras->description }}</p>
                              </div>
                          </div>
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

















