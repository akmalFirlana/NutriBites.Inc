<!-- resources/views/tab_navigation.blade.php -->

@extends('layouts.inproduk')

@section('content')
<div class="contain">
    <!-- Tabs Navigation -->
    <div class="tabs d-flex justify-content-around">
        <button class="tab-link active" onclick="openTab(event, 'productDetails')">Detail Produk</button>
        <button class="tab-link" onclick="openTab(event, 'ratingReviews')">Rating & Ulasan</button>
        <button class="tab-link" onclick="openTab(event, 'faqs')">FAQs</button>
    </div>

    <!-- Tabs Content -->
    <div id="productDetails" class="tab-content" style="display: block;">
        <div class="product-detail container my-5">
            <!-- Nama Produk -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="fw-bold mb-4">Nama Produk</h1>
                </div>
            </div>

            <!-- Deskripsi dan Komposisi Produk -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h2 class="fs-4 fw-bold">Deskripsi Produk</h2>
                    <p class="text-muted">Produk ini adalah makanan ringan sehat yang terbuat dari bahan alami dan
                        bergizi. Cocok untuk kamu yang ingin menjaga pola makan dengan makanan yang sehat dan praktis.
                    </p>
                </div>
                <div class="col-md-6 mb-4">
                    <h2 class="fs-4 fw-bold">Komposisi</h2>
                    <ul class="list-unstyled text-muted">
                        <li>- Biji Gandum Utuh</li>
                        <li>- Gula Kelapa</li>
                        <li>- Garam Laut</li>
                        <li>- Minyak Zaitun</li>
                        <li>- Kacang Almond</li>
                    </ul>
                </div>
            </div>

            <!-- Informasi Gizi -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h2 class="fs-4 fw-bold">Informasi Gizi</h2>
                    <p class="text-muted">Per sajian (100g):</p>
                    <ul class="list-unstyled text-muted">
                        <li>- Kalori: 250 kkal</li>
                        <li>- Lemak: 12g</li>
                        <li>- Karbohidrat: 30g</li>
                        <li>- Protein: 6g</li>
                        <li>- Serat: 5g</li>
                    </ul>
                </div>
                <!-- Foto Informasi Gizi -->
                <div class="col-md-6 mb-4 text-center">
                    
                    <p class="text-muted mt-2">Informasi Gizi Lengkap</p>
                    <p>-</p>
                </div>
            </div>
        </div>

    </div>

    <div id="ratingReviews" class="tab-content">
        <div class="ulasan-header">
            <h2>Ulasan <span class="text-muted fs-4">(123)</span></h2>

        </div>
        <div class="colom-ulasan row justify-content-around">
            <div class="card-ulasan mt-4 border rounded-4 px-5 py-2" style="flex-basis:48%">
                <div class="rating">
                    <div class="d-flex mt-4">
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star-half' style='color:#d0e12b'></i>
                    </div>
                </div>
                <h1 class="fs-3 fw-bold my-2">Tedeus Judas</h1>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet
                    consectetur adipisicing elit</p>

                <p class="text-muted fw-bold">17 Agustus 2045</p>
            </div>
            <div class="card-ulasan mt-4 border rounded-4 px-5 py-2" style="flex-basis:48%">
                <div class="rating">
                    <div class="d-flex mt-4">
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star-half' style='color:#d0e12b'></i>
                    </div>
                </div>
                <h1 class="fs-3 fw-bold my-2">Tedeus Judas</h1>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet
                    consectetur adipisicing elit</p>

                <p class="text-muted fw-bold">17 Agustus 2045</p>
            </div>
            <div class="card-ulasan mt-4 border rounded-4 px-5 py-2" style="flex-basis:48%">
                <div class="rating">
                    <div class="d-flex mt-4">
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star-half' style='color:#d0e12b'></i>
                    </div>
                </div>
                <h1 class="fs-3 fw-bold my-2">Tedeus Judas</h1>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet
                    consectetur adipisicing elit</p>

                <p class="text-muted fw-bold">17 Agustus 2045</p>
            </div>
            <div class="card-ulasan mt-4 border rounded-4 px-5 py-2" style="flex-basis:48%">
                <div class="rating">
                    <div class="d-flex mt-4">
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star' style='color:#d0e12b'></i>
                        <i class='bx bxs-star-half' style='color:#d0e12b'></i>
                    </div>
                </div>
                <h1 class="fs-3 fw-bold my-2">Tedeus Judas</h1>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet
                    consectetur adipisicing elit</p>

                <p class="text-muted fw-bold">17 Agustus 2045</p>
            </div>

            <div class="text-center mt-4">
                <button class="btn btn-white fw-bold py-2 px-5 fs-4 rounded-pill" style="border: #000 1px solid">Muat
                    Lebih</button>
            </div>
        </div>
    </div>

    <div id="faqs" class="tab-content">
        <div class="ulasan-header">
            <h2>Pertanyaan <span class="text-muted fs-4">(12)</span></h2>

        </div>
        <div class="faq-ulasan row justify-content-around">
            <div class="card-ulasan border rounded px-5 py-3 mb-4" style="flex-basis:48%">
                <div class="d-flex align-items-center mb-2">
                    <i class='bx bxs-user-circle' style='font-size:24px; color:#007bff'></i>
                    <h1 class="fs-3 pt-2 fw-bold mx-2">Samantha D. <i class="bx bxs-check-circle"
                            style="color:green"></i>
                    </h1>
                </div>
                <p class="">"Apakah bahan kaos ini mudah rusak setelah dicuci beberapa kali?"</p>
                <p class="text-muted fw-bold">Posted on August 14, 2023</p>


                <div class="d-flex align-items-center mt-4 ms-4">
                    <i class='bx bxs-store' style='font-size:24px; color:#007bff'></i>
                    <h1 class="fs-5 fw-bold mx-2">Penjual <i class="bx bxs-check-circle" style="color:green"></i></h1>
                </div>
                <p class="text-muted ms-5">"Terima kasih atas pertanyaannya. Bahan kaos ini sangat tahan lama dan tidak
                    mudah
                    rusak bahkan setelah dicuci berkali-kali. Pastikan mencuci dengan air dingin dan jangan menggunakan
                    pemutih untuk menjaga kualitas bahan."</p>
                <a href="#" class="fw-bold text-decoration-none">Lihat Lebih Banyak</a>
            </div>
            <div class="card-ulasan border rounded px-5 py-3 mb-4" style="flex-basis:48%">
                <div class="d-flex align-items-center mb-2">
                    <i class='bx bxs-user-circle' style='font-size:24px; color:#007bff'></i>
                    <h1 class="fs-3 pt-2 fw-bold mx-2">Samantha D. <i class="bx bxs-check-circle"
                            style="color:green"></i>
                    </h1>
                </div>
                <p class="">"Apakah bahan kaos ini mudah rusak setelah dicuci beberapa kali?"</p>
                <p class="text-muted fw-bold">Posted on August 14, 2023</p>


                <div class="d-flex align-items-center mt-4 ms-4">
                    <i class='bx bxs-store' style='font-size:24px; color:#007bff'></i>
                    <h1 class="fs-5 fw-bold mx-2">Penjual <i class="bx bxs-check-circle" style="color:green"></i></h1>
                </div>
                <p class="text-muted ms-5">"Terima kasih atas pertanyaannya. Bahan kaos ini sangat tahan lama dan tidak
                    mudah
                    rusak bahkan setelah dicuci berkali-kali. Pastikan mencuci dengan air dingin dan jangan menggunakan
                    pemutih untuk menjaga kualitas bahan."</p>
                <a href="#" class="fw-bold text-decoration-none">Lihat Lebih Banyak</a>
            </div>
            <div class="card-ulasan border rounded px-5 py-3 mb-4" style="flex-basis:48%">
                <div class="d-flex align-items-center mb-2">
                    <i class='bx bxs-user-circle' style='font-size:24px; color:#007bff'></i>
                    <h1 class="fs-3 pt-2 fw-bold mx-2">Samantha D. <i class="bx bxs-check-circle"
                            style="color:green"></i>
                    </h1>
                </div>
                <p class="">"Apakah bahan kaos ini mudah rusak setelah dicuci beberapa kali?"</p>
                <p class="text-muted fw-bold">Posted on August 14, 2023</p>


                <div class="d-flex align-items-center mt-4 ms-4">
                    <i class='bx bxs-store' style='font-size:24px; color:#007bff'></i>
                    <h1 class="fs-5 fw-bold mx-2">Penjual <i class="bx bxs-check-circle" style="color:green"></i></h1>
                </div>
                <p class="text-muted ms-5">"Terima kasih atas pertanyaannya. Bahan kaos ini sangat tahan lama dan tidak
                    mudah
                    rusak bahkan setelah dicuci berkali-kali. Pastikan mencuci dengan air dingin dan jangan menggunakan
                    pemutih untuk menjaga kualitas bahan."</p>
                <a href="#" class="fw-bold text-decoration-none">Lihat Lebih Banyak</a>
            </div>
        </div>
    </div>
</div>

<script>
    function openTab(evt, tabName) {
        // Sembunyikan semua tab-content
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Hapus class 'active' dari semua tab-link
        tablinks = document.getElementsByClassName("tab-link");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Tampilkan tab yang dipilih, tambahkan class 'active' pada tab-link yang diklik
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
@endsection