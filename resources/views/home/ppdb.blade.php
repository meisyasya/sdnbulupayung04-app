<style>
    /* CSS for main content to push it down */
.main-content {
    padding-top: 20px; /* Reduce the space at the top */
    margin-top: 0; /* Remove extra margin at the top if any */
    min-height: 50vh; /* Adjust to maintain the content's height */
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* Align items to the top */
}


</style>



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


<div class="main-content contact mt-5">
    <div class="footer-top">
        
            <div class="container-fluid">
                <div class="row">
                    
                    <img src="{{ asset('storage/ppdb/' . $ppdb->photo) }}" alt="Responsive image" class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="50%" height="100">

                    

                   
                </div>
          
        </div>
    </div>
</div>


</div>


{{-- footer --}}
@include('layout.footer')
@endsection
