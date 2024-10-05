<footer class="mt-5">
    <div class="footer-top bg-dark text-white p-5">
        <div class="footer mt-5 bg-dark text-white p-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h2 class="fw-bold">SDN BULUPAYUNG 04</h2>
                        <p>
                            SDN Bulupayung 04 menyediakan pendidikan berkualitas dengan kurikulum merdeka. Kami berkomitmen mengembangkan potensi siswa agar menjadi individu cerdas dan berkarakter. Bergabunglah bersama kami!
                        </p>
                        <strong>Phone </strong>: <span>{{ $contact->judul }}</span>
                        <br />
                        <strong>Email </strong>: <span>{{ $contact->subjudul }}</span>
                    </div>
                    <div class="col-md-2">
                        <h2 class="fw-bold">Link Penting</h2>
                        <ul class="list-group list-unstyled">
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Home
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    About
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Prestasi
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Galeri
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Berita
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Contact
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    PPDB
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h2 class="fw-bold">Berita</h2>
                        <ul class="list-group list-unstyled">
                            <li class="list-item">
                                <a href="/" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Home
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="{{ route('visimisi') }}" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    About 
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Prestasi
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="{{ route('galeri') }}" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Galeri
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Berita
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="{{ route('contact') }}" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Contact
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="{{ route('ppdb') }}" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    PPDB
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fw-bold">Ikuti Sosial Media Kami</h4>
                        <div class="input-group mb-3">
                           
                            <button
                                class="btn btn-subscribe"
                                type="button"
                                id="inputGroupFileAddon04"
                            >
                                Subscribe
                            </button>
                        </div>
                        <div class="social-links">
                            <a href="" class="mx-2 text-white">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a href="" class="mx-2 text-white">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="" class="mx-2 text-white">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-down bg-darker text-white px-5 py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="copyright">
                        &copy; Copyright <strong>sdnbulupayung04</strong> All Right Reserved
                    </div>
                    <div class="credits">Designed By Meisya Anggraeni</div>
                </div>
                <div class="col-md-5">
                    <!-- Removed social links from here -->
                </div>
            </div>
        </div>
    </div>
</footer>
