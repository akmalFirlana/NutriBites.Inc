<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
    @vite('resources/scss/app.scss')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
</head>

<body>
    <div class="navigation mb-2">
        <div class="nav-center container d-flex">
            <a href="index.html" class="d-flex">
                <img class="logo-img" src="{{ asset('image/NutriBites.svg') }}" style="width: 120px;" alt="Logok"> </a>

            <ul class="nav-list d-flex mt-1">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Kategori') }}" class="nav-link">Kategori</a>
                </li>
                <li class="nav-item">
                    <a href="#terms" class="nav-link">Favorit</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">Promo</a>
                </li>
            </ul>
            <li class="nav-item">
                <form class="form-s">
                    <button>
                        <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-labelledby="search">
                            <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                                stroke="currentColor" stroke-width="1.333" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <input class="input" placeholder="Cari Produk Kamu" required="" type="text">
                    <button class="reset" type="reset">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </form>
            </li>
            <div class="icons d-flex">
                <a href="{{ route('cart') }}" class="icon">
                    <i class="bx bx-cart"></i>
                    <span class="d-flex">0</span>
                </a>
                <a href="login.html" class="icon">
                    <i class="bx bx-user"></i>
                </a>

            </div>

            <div class="hamburger">
                <i class="bx bx-menu-alt-left"></i>
            </div>
        </div>
    </div>
    <hr class="hr" style="margin-top: 22px;">

    <div class="link d-block tw-mt-20 tw-pt-5 tw-ms-20">
        <a href="{{ route('home') }}" class="text-muted me-2">Beranda</a> >
        <a href="{{ route('Kategori') }}" class="text-muted ms-2">Kripik Kacang</a>
    </div>
    <div class="section tw-pt-10 pb-5">
        <div class="header row mt-3 mb-5">
            <div class="col-md-2 d-flex flex-column justify-content-end align-items-end sub_img">
                <img src="{{ asset('image/nangka.jpeg') }}" alt="" class="sideimg" style="margin-top: 0px!important">
                <img src="{{ asset('image/nangka.jpeg') }}" alt="" class="sideimg">
                <img src="{{ asset('image/nangka.jpeg') }}" alt="" class="sideimg">
            </div>
            <div class="col-md-4 main_img">
                <img src="{{ asset('image/nangka.jpeg') }}" alt="" class="mainimg tw-bg-cover tw-bg-center"
                    style="border-radius: 20px; border: 1px solid #d0e12b; height: 440px; width: 400px;">
            </div>

            <div class="col-md-6 hero-desk tw-mt-20">
                <h1 class="title-text tw-text-5xl fw-bold">Kacang Pede</h1>
                <div class="d-flex mt-4">
                    <i class='bx bxs-star bx-lg' style='color:#d0e12b'></i>
                    <i class='bx bxs-star bx-lg' style='color:#d0e12b'></i>
                    <i class='bx bxs-star bx-lg' style='color:#d0e12b'></i>
                    <i class='bx bxs-star bx-lg' style='color:#d0e12b'></i>
                    <i class='bx bxs-star-half bx-lg' style='color:#d0e12b'></i>
                    <span class="badge bg-success ms-2">4.7</span>
                </div>

                <div class="harga d-flex mt-4">
                    <h1 class="price me-3 fs-2">Rp 40.000</h1>
                    <h1 class="discount fs-3 text-decoration-line-through text-muted">Rp 50.000 <span
                            class="badge bg-success ms-2">20%</span></h1>
                </div>
                <p class="desc mt-4 text-muted fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <hr class="bawah">
                <div class="jumlah">
                    <label>Jumlah</label>
                    <div class="input-number-container">
                        <button type="button" class="btn-decrement" onclick="decrement()">−</button>
                        <input type="number" id="number-input" value="1" min="0" class="input-number" />
                        <button type="button" class="btn-increment" onclick="increment()">+</button>
                    </div>
                </div>
                <hr class="bawah">
                <p>Varian:</p>
                <div class="d-flex">
                    <div class="button-group">
                        <input type="radio" id="svelt" name="frameworks" checked="" />
                        <label for="svelt">Svelt</label>
                    </div>

                    <div class="button-group">
                        <input type="radio" id="react" name="frameworks" />
                        <label for="react">React</label>
                    </div>

                    <div class="button-group">
                        <input type="radio" id="vue" name="frameworks" />
                        <label for="vue">Vue</label>
                    </div>
                    <div class="button-group">
                        <input type="radio" id="vua" name="frameworks" />
                        <label for="vua">Vue</label>
                    </div>
                    <div class="button-group">
                        <input type="radio" id="vui" name="frameworks" />
                        <label for="vui">Vue</label>
                    </div>
                </div>
                <div class="action row mt-5 text-center d-flex justify-content-intebetween">
                    <div class="col-md-4"></div>
                    <button type="submit" class="btn btn-success mt-3 ms-3 col-md-5 rounded-pill px-2 py-3 fs-5">Beli
                        Sekarang</button>
                </div>

            </div>

        </div>

        <div class="tw-mt-20">
            @yield('content')
        </div>

        <section class="mt-1">
            <h1 class="text-center fw-bold" style="font-size: 4rem; margin-top: 4rem">Rekomendasi Produk</h1>
            <p class="text-center text-gray-400 mb-5" style="font-size: 1.5rem;">Nikmati pilihan produk snack sehat
                terbaik yang
                dipilih khusus untuk Anda!</p>
            <div class="row justify-content-between" style="margin: 0 7rem">
                <div class="col-sm-3 procard">
                    <div class="card shadow">
                        <img src="{{ asset('image/dummi.jpg') }}" alt="black watch">
                        <div class="card-footer border-top border-gray-300 p-4">
                            <a href="#" class="h5">Kripik Nangka</a>
                            <h3 class="h6 fw-light text-gray mt-2">Kripik yang terbuat dari buah nangka pilihan</h3>
                            <div class="d-flex mt-3">
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star-half' style='color:#d0e12b'></i>
                                <span class="badge bg-success ms-2">4.7</span>
                            </div>
                            <div class="d-flex mt-3">
                                <span class=" mb-0 text-gray me-2 fs-5">Rp 20.000</span>
                                <span class="text-decoration-line-through fs-6" style="color:gray">Rp 25.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 procard">
                    <div class="card shadow">
                        <img src="{{ asset('image/dummi.jpg') }}" alt="black watch">
                        <div class="card-footer border-top border-gray-300 p-4">
                            <a href="#" class="h5">Kripik Nangka</a>
                            <h3 class="h6 fw-light text-gray mt-2">Kripik yang terbuat dari buah nangka pilihan</h3>
                            <div class="d-flex mt-3">
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star-half' style='color:#d0e12b'></i>
                                <span class="badge bg-success ms-2">4.7</span>
                            </div>
                            <div class="d-flex mt-3">
                                <span class=" mb-0 text-gray me-2 fs-5">Rp 20.000</span>
                                <span class="text-decoration-line-through fs-6" style="color:gray">Rp 25.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 procard">
                    <div class="card shadow">
                        <img src="{{ asset('image/dummi.jpg') }}" alt="black watch">
                        <div class="card-footer border-top border-gray-300 p-4">
                            <a href="#" class="h5">Kripik Nangka</a>
                            <h3 class="h6 fw-light text-gray mt-2">Kripik yang terbuat dari buah nangka pilihan</h3>
                            <div class="d-flex mt-3">
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star-half' style='color:#d0e12b'></i>
                                <span class="badge bg-success ms-2">4.7</span>
                            </div>
                            <div class="d-flex mt-3">
                                <span class=" mb-0 text-gray me-2 fs-5">Rp 20.000</span>
                                <span class="text-decoration-line-through fs-6" style="color:gray">Rp 25.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 procard">
                    <div class="card shadow">
                        <img src="{{ asset('image/dummi.jpg') }}" alt="black watch">
                        <div class="card-footer border-top border-gray-300 p-4">
                            <a href="#" class="h5">Kripik Nangka</a>
                            <h3 class="h6 fw-light text-gray mt-2">Kripik yang terbuat dari buah nangka pilihan</h3>
                            <div class="d-flex mt-3">
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star' style='color:#d0e12b'></i>
                                <i class='bx bxs-star-half' style='color:#d0e12b'></i>
                                <span class="badge bg-success ms-2">4.7</span>
                            </div>
                            <div class="d-flex mt-3">
                                <span class=" mb-0 text-gray me-2 fs-5">Rp 20.000</span>
                                <span class="text-decoration-line-through fs-6" style="color:gray">Rp 25.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-white">Muat Lebih</button>
            </div>
        </section>
    </div>

    <footer class="text-center text-lg-start pt-5 pb-5" style="background-color: #f0f0f0">
        <div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <img class="logo-img" src="{{ asset('image/NutriBites.svg') }}" style="width: 120px;"
                            alt="Logok">
                        <p style="color: #606060; font-size: 14px; max-width: 200px" class="mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Molestiae modi cum ipsam ad.
                        </p>

                        <div class="mt-4 d-flex">

                            <a class="socialContainer containerOne " href="#">
                                <svg viewBox="0 0 16 16" class="socialSvg instagramSvg">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                    </path>
                                </svg>
                            </a>

                            <a class="socialContainer containerTwo" href="#">
                                <svg viewBox="0 0 16 16" class="socialSvg twitterSvg">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                    </path>
                                </svg> </a>

                            <a class="socialContainer containerThree" href="#">
                                <svg viewBox="0 0 448 512" class="socialSvg linkdinSvg">
                                    <path
                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                    </path>
                                </svg>
                            </a>

                            <a class="socialContainer containerFour" href="#">
                                <svg viewBox="0 0 16 16" class="socialSvg whatsappSvg">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                                    </path>
                                </svg>
                            </a>

                        </div>

                    </div>
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase fw-bold">Company</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="">Tentang kami</a>
                            </li>
                            <li>
                                <a href="#!" class="">Fitur</a>
                            </li>
                            <li>
                                <a href="#!" class="">E-mail</a>
                            </li>
                            <li>
                                <a href="#!" class="">Dukung kami</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase fw-bold">Bantuan</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="">Cusstomer support</a>
                            </li>
                            <li>
                                <a href="#!" class="">Metode pengiriman</a>
                            </li>
                            <li>
                                <a href="#!" class="">Syarat & ketentuan</a>
                            </li>
                            <li>
                                <a href="#!" class="">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase fw-bold">Faq</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="">Akun</a>
                            </li>
                            <li>
                                <a href="#!" class="">Atur Pengiriman</a>
                            </li>
                            <li>
                                <a href="#!" class="">Pesanan</a>
                            </li>
                            <li>
                                <a href="#!" class="">Pembayaran</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase fw-bold">Resources</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="">Sumber Informasi</a>
                            </li>
                            <li>
                                <a href="#!" class="">Komunitas</a>
                            </li>
                            <li>
                                <a href="#!" class="">Dukungan</a>
                            </li>
                            <li>
                                <a href="#!" class="">Free course</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

        </div>
        <!-- Grid container -->
        <hr style="margin-top: 22px; max-width: 90%;" class="mx-auto">
        <!-- Copyright -->
        <div class="ps-5 pt-3 pb-3 col-md-4" style="background-color: rgba(0, 0, 0,); font-size: 1.2rem">
            NutriBites © 2024, All Rights Reserved
        </div>
    </footer>

    <script>
        function increment() {
            const input = document.getElementById('number-input');
            input.value = parseInt(input.value) + 1;
        }

        function decrement() {
            const input = document.getElementById('number-input');
            if (input.value > 1) {
                input.value = parseInt(input.value) - 1;
            }
        }
    </script>
</body>

</html>