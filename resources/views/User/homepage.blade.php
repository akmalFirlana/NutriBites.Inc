@extends('layouts.index')

@section('content')

<section class="header tw-min-h-screen" style="background-color: #F2F0F1; overflow: hidden; position: relative">
    <div class="" style="margin-left: 7rem;">
        <h1 class="header-text col-md-7 fw-bold mt-4" style="font-size: 4.8rem;  padding: 6rem 7rem 0 0;">Camilan Sehat,
            Rasa
            Nikmat: Pilihan Tepat Untuk Hidup Yang Lebih Baik</h1>
        <p class="col-md-6 text-gray-400" style="padding: 0.8rem 7rem 2rem 0; font-size: 1.5rem;">Browse through our
            diverse range of meticulously crafted garments, designed to bring out your individuality
            and cater to your sense of style.</p>
        <button class="btn"
            style="border-radius: 25px; background-color: #01AB31; color: white; padding: 1rem 3rem; font-size: 1.5rem; font-weight: 500">Bergabung</button>
        <div class="support row mt-5">
            <div class="col-md-1 kanan">
                <h1 class="fw-bold fs-1">200+</h1>
                <h1 class="fs-6" style="color: grey">Brand Makanan</h1>
            </div>
            <div class="col-md-1 me-2 kanan">
                <h1 class="fw-bold fs-1">5.000+</h1>
                <h1 class="fs-6" style="color: grey">Produk Makanan</h1>
            </div>
            <div class="col-md-1 ms-2">
                <h1 class="fw-bold fs-1">10+</h1>
                <h1 class="fs-6" style="color: grey">Metode Pembayaran</h1>
            </div>
        </div>
        <img src="{{ asset('image/Vector.svg') }}" alt="Logo" style="position: absolute; bottom: 190; right: 500;">
        <img src="{{ asset('image/Vector.svg') }}" alt="Logo"
            style="height: 80; position: absolute; bottom: 380; right: 90;">
        <img src="{{ asset('image/Vector.svg') }}" alt="Logo"
            style="height: 40; position: absolute; bottom: 100; right: 900;">
        <img src="{{ asset('image/Vector.svg') }}" alt="Logo"
            style="height: 50; position: absolute; bottom: 350; right: 390;">
        <img src="{{ asset('image/hero.png') }}" alt="Logo"
            style="height: 590; position: absolute; bottom: -160; right: -100;">
    </div>
</section>

<section class="mt-5">
    <h1 class="text-center fw-bold" style="font-size: 4rem; margin-top: 6rem">Rekomendasi Produk</h1>
    <p class="text-center text-gray-400 mb-5" style="font-size: 1.5rem;">Nikmati pilihan produk snack sehat terbaik yang
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
    <div class="text-center m-5">
        <button class="btn btn-white">Muat Lebih</button>
    </div>
</section>
<hr class="mx-auto" style="border-color: #141113; width: 90%; height: 2px">
<section class="mt-1">
    <h1 class="text-center fw-bold" style="font-size: 4rem; margin-top: 4rem">Rekomendasi Produk</h1>
    <p class="text-center text-gray-400 mb-5" style="font-size: 1.5rem;">Nikmati pilihan produk snack sehat terbaik yang
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

