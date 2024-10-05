@extends('layout.app')

@section('title')
    ppdb
@endsection

@section('content')

 <!-- breadcumbs -->
 <div class="breadcumbs py-2">
  <div class="container">
      <div class="d-flex justify-content-between text-white">
          <h2>PPDB</h2>
          <ol class="d-flex list-unstyled">
              <li>Home</li>
              <li>Ppdb</li>
          </ol>
      </div>
  </div>
</div>
<!-- end breadcumbs -->


<div class="about-us mt-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">PPDB</h2>
      </div>
    
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="masonry gambar-container mt-4" data-aos="zoom-in-up">

            <img src="{{ asset('storage/ppdb/' . $ppdb->photo) }}" alt="Responsive image" class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250">
           
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection