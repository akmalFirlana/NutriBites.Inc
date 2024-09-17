@extends('layouts.main_penjual')

@section('content')
<!--========== CONTENTS ==========-->
<main>
    <section>
        <h1 class="fw-bold fs-3 mt-2 mb-3">Tambah Produk</h1>
        <div class="container pb-5 mb-3">
            <h1 class="fw-bold fs-5 p-3">Foto Produk</h1>
            <div class="Foto d-flex ms-2">
                <label class="custum-file-upload" for="file">
                    <div class="icon">
                        <i class='bx bx-image-add'></i>
                    </div>
                    <div class="text">
                        <span>Click to upload image</span>
                    </div>
                    <input type="file" id="file">
                </label>
                <label class="custum-file-upload ms-3" for="file">
                    <div class="icon">
                        <i class='bx bx-image-add'></i>
                    </div>
                    <div class="text">
                        <span>Click to upload image</span>
                    </div>
                    <input type="file" id="file">
                </label>


            </div>

            <h1 class="fw-bold fs-5 p-3">informasi Produk</h1>
            <div class="form row m-2">
                <form class="row d-flex">
                    <div class="col-md-6">
                        <label class="fw-bold">Nama Produk:</label>
                        <input type="text" class="form-control" style="width: 450px;"
                            placeholder="Masukkan Nama Produk">
                    </div>
                    <div class="col-md-6">
                        <label class="fw-bold">Stok Produk:</label>
                        <input type="number" class="form-control" style="width: 350px;"
                            placeholder="Masukkan Jumlah Produk">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label class="fw-bold">Harga Produk</label>
                        <input type="number" class="form-control" style="width: 450px;" placeholder="Rp 3xxxxx">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label class="fw-bold">Kategori Produk:</label>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih kategori
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li class="dropdown-item"><input type="checkbox" name="category[]" value="kategori1">
                                    Kategori 1</li>
                                <li class="dropdown-item"><input type="checkbox" name="category[]" value="kategori2">
                                    Kategori 2</li>
                                <li class="dropdown-item"><input type="checkbox" name="category[]" value="kategori3">
                                    Kategori 3</li>
                                <li class="dropdown-item"><input type="checkbox" name="category[]" value="kategori1">
                                    Kategori 1</li>
                                <li class="dropdown-item"><input type="checkbox" name="category[]" value="kategori2">
                                    Kategori 2</li>
                                <li class="dropdown-item"><input type="checkbox" name="category[]" value="kategori3">
                                    Kategori 3</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10 mt-3">
                        <label class="fw-bold">Deskripsi:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Deskripsikan produkmu"></textarea>
                    </div>
                    <div class="col-md-5 mt-3">
                        <label class="fw-bold">Informasi Gizi:</label>
                        <div class="grid w-full max-w-xs items-center gap-1.5">
                            <label
                                class="text-sm text-gray-400 font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 mt-2">dapat
                                berupa gambar atau file excel</label>
                            <button class="container-btn-file mt-2">
                                <i class='bx bxs-file-plus me-2'></i>
                                Upload File
                                <input class="file" name="text" type="file" />
                            </button>
                        </div>
                    </div>


                    <!--
                    <div class="col-md-1 mt-3">
                        <label class="fw-bold">&nbsp;/</label>
                        <div class="grid w-full max-w-xs items-center gap-1.5">
                            <label
                                class="text-sm text-gray-400 font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                /</label>
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <label class="fw-bold"></label>
                        <div class="grid w-full max-w-xs items-center gap-1.5">
                            <label
                                class="text-sm text-gray-400 font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 mt-2">
                                atau Berupa teks</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    -->

                    
                    <div class="col-md-7 mt-3"></div>
                    <div class="col-md-7 mt-3"></div>
                    <div class="col-md-4 mt-3">
                        <button type="submit" class="btn btn-primary mt-3 ms-5" style="width: 200px;"><i
                                class='bx bxs-cloud-upload me-2'></i>Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<!--========== MAIN JS ==========-->