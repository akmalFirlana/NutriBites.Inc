<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/scss/app.scss')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Laravel Registration</title>
</head>

<body>

    <div class="form-container row">
        <!-- Sidebar dengan gambar -->
        <div class="sider col-md-7 bg-success ps-0 position-relative">
            <img src="{{ asset('image/daftar2.svg') }}" alt="" class="tw-h-80 tw-w-80 tw-mt-40 mx-auto">
            <div class="position-absolute top-0 end-0 tw-h-screen tw-w-fit">
                <img src="{{ asset('image/waves.svg') }}" class="tw-h-screen">
            </div>
        </div>

        <!-- Form multistep -->
        <div id="multiStepForm" class="col-md-5 tw-h-screen d-flex">
            <div class="form-page mx-auto mt-5" id="page1">
                <div class="form me-5">
                    <p class="title">Register</p>
                    <p class="message">Daftar Dan Bergabung Bersama Kami</p>
                    <div class="flex">
                        <label>
                            <input required placeholder="" type="text" class="input">
                            <span>Nama Depan</span>
                        </label>

                        <label>
                            <input required placeholder="" type="text" class="input">
                            <span>Nama Belakang</span>
                        </label>
                    </div>

                    <label>
                        <input required placeholder="" type="email" class="input">
                        <span>Email</span>
                    </label>

                    <label>
                        <input required placeholder="" type="password" class="input">
                        <span>Password</span>
                    </label>

                    <label>
                        <input required placeholder="" type="password" class="input">
                        <span>Konfirmasi Password</span>
                    </label>

                    <button class="submit" onclick="nextPage(2)">Submit</button>
                    <p class="signin">Sudah Punya Akun? <a href="#" onclick="nextPage(3)">Login</a></p>
                </div>
            </div>

            <!-- Halaman kedua (Lokasi) -->
            <div class="form-page mx-auto mt-5" id="page2" style="display: none;">
                <div class="form me-5">
                    <p class="title">Register</p>
                    <p class="message">Daftar Dan Bergabung Bersama Kami</p>
                    <div class="flex">
                        <label>
                            <div class="form-group mb-3">
                                <label for="provinsi">Provinsi:</label>
                                <select id="provinsi" class="form-control">
                                    <option value="">-- Pilih Provinsi --</option>
                                    <!-- Tambahkan Provinsi -->
                                </select>
                            </div>
                        </label>

                        <label>
                            <div class="form-group mb-3">
                                <label for="kota">Kota/Kabupaten:</label>
                                <select id="kota" class="form-control">
                                    <option value="">-- Pilih Kota/Kabupaten --</option>
                                    <!-- Kota/Kabupaten Dinamis -->
                                </select>
                            </div>
                        </label>
                    </div>

                    <label>
                        <div class="form-group mb-3">
                            <label for="kecamatan">Kecamatan:</label>
                            <select id="kecamatan" class="form-control">
                                <option value="">-- Pilih Kecamatan --</option>
                                <!-- Kecamatan Dinamis -->
                            </select>
                        </div>
                    </label>

                    <label>
                        <div class="form-group mb-3">
                            <label for="desa">Desa/Kelurahan:</label>
                            <select id="desa" class="form-control">
                                <option value="">-- Pilih Desa/Kelurahan --</option>
                                <!-- Desa/Kelurahan Dinamis -->
                            </select>
                        </div>
                    </label>

                    <button class="submit btn-success" onclick="window.location.href='/'">Submit</button>
                    <p class="signin">Sudah Punya Akun? <a href="#" onclick="nextPage(3)">Login</a></p>
                </div>
            </div>

            <!-- Halaman ketiga (Login) -->
            <div class="form-page mx-auto mt-5" id="page3" style="display: none;">
                <div class="form me-5">
                    <p class="title">Login</p>
                    <p class="message">Masuk ke Akun Anda</p>
                    <label style="width: 310px;">
                        <input required placeholder="" type="email" class="input">
                        <span>Email</span>
                    </label>

                    <label style="width: 310px;">
                        <input required placeholder="" type="password" class="input">
                        <span>Password</span>
                    </label>
                    <button class="submit" onclick="nextPage(window.location.href='/')">Login</button>
                    <p class="signin">Belum Punya Akun? <a href="#" onclick="nextPage(1)">Register</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Multistep Form -->
    <script>
        function nextPage(page) {
            document.querySelectorAll('.form-page').forEach(function (pageElem) {
                pageElem.style.display = 'none';
            });
            document.getElementById('page' + page).style.display = 'block';
        }

        $(document).ready(function () {
            $('#provinsi').on('change', function () {
                var provinsiId = $(this).val();
                if (provinsiId) {
                    $.ajax({
                        url: '/lokasi/kota/' + provinsiId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            $('#kota').empty().append('<option value="">-- Pilih Kota/Kabupaten --</option>');
                            $.each(data, function (key, value) {
                                $('#kota').append('<option value="' + value.id + '">' + value.nama + '</option>');
                            });
                        }
                    });
                }
            });

            $('#kota').on('change', function () {
                var kotaId = $(this).val();
                if (kotaId) {
                    $.ajax({
                        url: '/lokasi/kecamatan/' + kotaId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            $('#kecamatan').empty().append('<option value="">-- Pilih Kecamatan --</option>');
                            $.each(data, function (key, value) {
                                $('#kecamatan').append('<option value="' + value.id + '">' + value.nama + '</option>');
                            });
                        }
                    });
                }
            });

            $('#kecamatan').on('change', function () {
                var kecamatanId = $(this).val();
                if (kecamatanId) {
                    $.ajax({
                        url: '/lokasi/desa/' + kecamatanId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            $('#desa').empty().append('<option value="">-- Pilih Desa/Kelurahan --</option>');
                            $.each(data, function (key, value) {
                                $('#desa').append('<option value="' + value.id + '">' + value.nama + '</option>');
                            });
                        }
                    });
                }
            });
        });
    </script>

</body>

</html>
