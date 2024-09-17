@extends('layouts.index')

@section('content')
<section class="bg-light my-5">
    <div class="container header">
        <div class="row">
            <!-- cart -->
            <div class="col-lg-9">
                <div class="card border shadow-0">
                    <div class="m-4">
                        <h2 class="card-title mb-4 fw-bold">Barang Yang Dibeli</h2>
                        <div class="row gy-3 mb-4">
                            <div class="col-lg-5">
                                <div class="me-lg-5">
                                    <div class="d-flex">
                                        <img src="{{ asset('image/dummi.jpg') }}" class="border rounded me-3"
                                            style="width: 96px; height: 96px;" />
                                        <div class="">
                                            <a href="#" class="nav-link d-block">Kripik Nangka Original</a>
                                            <p class="text-muted fs-5 mb-0">Varian: Original</p>
                                            <text class="h4 text-decoration-line-through text-muted"><span
                                                    class="badge bg-success ms-2">10%</span>Rp 60.000</text>
                                            <small class="text-nowrap fw-bold"> Rp 50.000 </small>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="container mt-5">
                            <div class="box-shadow">
                                <h5>Pengiriman dan Pembayaran</h5>
                                <div class="d-flex justify-content-between align-items-start mt-3">
                                    <div>
                                        <span class="label-badge">Utama</span>
                                        <p class="fw-bold mb-0">Rumah (bengkel) - Joko Santoso (6282237650234)</p>
                                        <p class="small-text">DS. Petungsewu RT 09 RW 03 Kec. Wagir Kab. Malang
                                            (bengkel), Wagir, Kab. Malang</p>
                                    </div>
                                    <button class="btn btn-link">></button>
                                </div>

                                <div class="divider"></div>

                                <div class="mb-3">
                                    <label for="pengiriman" class="form-label fw-bold">Pilih Pengiriman</label>
                                    <select class="form-select" id="pengiriman">
                                        <option selected>Reguler</option>
                                        <!-- Options lain jika ada -->
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="kurir" class="form-label fw-bold">Pilih Kurir</label>
                                    <div class="d-flex justify-content-between">
                                        <select class="form-select" id="kurir">
                                            <option selected>AnterAja (Rp25.900)</option>
                                            <!-- Options lain jika ada -->
                                        </select>
                                        <p class="text-muted">Estimasi tiba 19 - 21 Sep</p>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/BNI_logo.svg"
                                            alt="BNI Logo" width="40">
                                        <p class="fw-bold">BNI Virtual Account</p>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p class="fw-bold">Asuransi Pengiriman</p>
                                        <span>Rp3.700</span>
                                        <input class="form-check-input" type="checkbox" checked>
                                    </div>
                                    <button class="btn btn-link">i</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top pt-4 mx-4 mb-4">
                        <p><i class="fas fa-truck text-muted fa-lg"></i> Gratis Ongkir Setiap Pembelian diatas Rp
                            500.000</p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut
                            aliquip
                        </p>
                    </div>
                </div>
            </div>
            <!-- cart -->
            <!-- summary -->
            <div class="col-lg-3">
                <div class="card mb-3 border shadow-0">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label class="form-label">Punya kupon?</label>
                                <div class="input-group">
                                    <input type="text" class="form-control border" name="" placeholder="Coupon code" />
                                    <button class="btn btn-light border">Terapkan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card shadow-0 border">
                    <div class="card-body">
                        <h1 class="fs-2 mb-3">Ringkasan Belanja</h1>
                        <h1 class="fs-4 mb-2">Total Belanja</h1>
                        <div class="d-flex justify-content-between text-muted fs-5">
                            <p class="mb-2 ">Total Harga:</p>
                            <p class="mb-2">Rp 329.000</p>
                        </div>
                        <div class="d-flex justify-content-between text-muted fs-5">
                            <p class="mb-2">Total Ongkos Kirim:</p>
                            <p class="mb-2 text-success">-Rp 60.000</p>
                        </div>
                        <div class="d-flex justify-content-between text-muted fs-5">
                            <p class="mb-2">Ansuransi Pengiriman:</p>
                            <p class="mb-2">Rp 14.000</p>
                        </div>
                        <hr />
                        <h1 class="fs-4 mb-2">Biaya Transaksi</h1>
                        <div class="d-flex justify-content-between text-muted fs-5">
                            <p class="mb-2">Biaya Layanan</p>
                            <p class="mb-2 text-success">Rp 6.000</p>
                        </div>
                        <div class="d-flex justify-content-between text-muted fs-5">
                            <p class="mb-2">Biaya Jasa Aplikasi</p>
                            <p class="mb-2">Rp 1.000</p>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between text-muted fs-4">
                            <p class="mb-2">Total Harga:</p>
                            <p class="mb-2 fw-bold">Rp 283.000</p>
                        </div>

                        <div class="mt-3">
                            <a href="#" class="btn btn-success w-100 shadow-0 py-3 fs-4"> <i
                                    class='bx bxs-check-shield me-1 bx-sm' style='color:#ffffff'></i> Beli Sekarang </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- summary -->
        </div>
    </div>
</section>
<!-- cart + summary -->
<!-- Recommended -->