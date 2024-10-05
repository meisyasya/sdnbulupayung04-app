<style>
    /* CSS for main content to push it down */
.main-content {
    padding-top: 50px; /* Reduce the space at the top */
    margin-top: 0; /* Remove extra margin at the top if any */
    min-height: 68vh; /* Adjust to maintain the content's height */
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* Align items to the top */
}


</style>



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


<div class="main-content contact mt-5">
    <div class="footer-top">
        <div class="footer mt-5 bg-light-gray text-white p-2 mb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="fw-bold" style="font-size: 28px;">CONTACT</h2>
                        <strong>Phone</strong>: <span>{{ $contact->judul }}</span><br>
                        <strong>Email</strong>: <span>{{ $contact->subjudul }}</span>
                    </div>

                    <div class="col-md-5">
                        <h2 class="fw-bold" style="font-size: 28px;">ALAMAT</h2>
                        <p>Jl. Masjid No 36, Bulupayung, Kesugihan, Cilacap</p>
                    </div>

                    <div class="col-md-4">
                        <h2 class="fw-bold" style="font-size: 28px;">MAPS</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.507099204911!2d109.13589628855337!3d-7.59980810468184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65697947411b99%3A0x6bd93bf381dac8de!2sSDN%20BULUPAYUNG%2004!5e0!3m2!1sid!2sid!4v1724398822964!5m2!1sid!2sid"
                            width="100%"
                            height="250"
                            frameborder="0"
                            style="border:0;"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection
