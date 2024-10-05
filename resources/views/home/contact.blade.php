


@extends('layout.app')

@section('title')
    Contact
@endsection

@section('content')


<!-- breadcumbs -->
<div class="breadcumbs py-2">
    <div class="container">
        <div class="d-flex justify-content-between text-white">
            <h2>Contact</h2>
            <ol class="d-flex list-unstyled">
                <li>Home</li>
                <li>Contact</li>
            </ol>
        </div>
    </div>
</div>
<!-- end breadcumbs -->





<div class="contact mb-5">
  <div class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.507099204911!2d109.13589628855337!3d-7.59980810468184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65697947411b99%3A0x6bd93bf381dac8de!2sSDN%20BULUPAYUNG%2004!5e0!3m2!1sid!2sid!4v1724398822964!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="container mt-5">
      <div class="row">
          <div class="col-md-12">
              <div class="card border-0 shadow shadow-sm">
                  <div class="card-body">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-4">
                                  <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                  <h4 class="fw-bolder">Location</h4>
                                  <p class="ms-5">Jl. Masjid No 36, Bulupayung, Kec. Kesugihan, Kabupaten Cilacap, Jawa Tengah 53274</p>
                              </div>
                              <div class="col-md-3">
                                  <i class="fa fa-envelope fa-2x primary float-start me-4"></i>
                                  <h4 class="fw-bolder">Email</h4>
                                  <p class="ms-5">{{ $contact->subjudul }}</p>
                              </div>
                              <div class="col-md-3">
                                  <i class="fa fa-phone-alt fa-2x primary float-start me-4"></i>
                                  <h4 class="fw-bolder">Telephone</h4>
                                  <p class="ms-5">{{ $contact->judul }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row mt-5">
          <div class="col-md-12">
              <div class="card border-0 shadow">
                  <div class="card-body p-4">
                    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<form action="{{ route('contact.send') }}" method="POST">
  @csrf
  <div class="row mt-4">
      <div class="col-md-6">
          <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
      </div>
      <div class="col-md-6">
          <input type="tel" name="phone" class="form-control" placeholder="No Telp Anda" required>
      </div>
  </div>
  <div class="row mt-4">
      <div class="col-md-12">
          <input type="text" name="subject" class="form-control" placeholder="Subjek" required>
      </div>
  </div>
  <div class="row mt-4">
      <div class="col-md-12">
          <textarea name="message" cols="30" class="form-control" placeholder="Pesan" required></textarea>
      </div>
  </div>
  <div class="row mt-4">
      <button type="submit" class="btn btn-submit">Kirim Pesan</button>
  </div>
</form>
                  
                  
                  
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

{{-- footer --}}
@include('layout.footer')




@endsection



    

     
    <!-- end contact -->



   <!-- footer -->





  

 
