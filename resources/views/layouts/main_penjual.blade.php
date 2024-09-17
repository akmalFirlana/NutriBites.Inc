<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landingpage</title>
    @vite('resources/css/app.css')
    @vite('resources/scss/app.scss')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/penjual.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__container w-100">
            <div class="position-absolute end-0 me-5 d-flex">
                <p class="my-auto me-2">Nama Toko</p><br>
                <img src="{{ asset('image/dummi.jpg') }}" alt="" class="header__img d-flex">
            </div>
            <a href="#" class="header__logo fw-bold pe-5">Nutri<span style="color: #BAB41E">Bit</span>es</a>

            <div class="header__search">
                <input type="search" placeholder="Cari Halaman" class="header__input">
                <i class='bx bx-search header__icon mt-1'></i>
            </div>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>

    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="{{ route('dashboard') }}" class="nav__link nav__logo">
                    <i class='bx bx-menu nav__icon'></i>
                    <span class="nav__logo-name">Nutri<span style="color: #BAB41E">Bit</span>es</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">

                        <a href="{{ route('dashboard') }}" class="nav__link">
                            <i class='bx bxs-dashboard nav__icon'></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">Profil</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="{{ route('PPass') }}" class="nav__dropdown-item">Keamanan</a>
                                    <a href="{{ route('PPesan') }}" class="nav__dropdown-item">Pesan</a>
                                    <a href="{{ route('profil') }}" class="nav__dropdown-item">Akun</a>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('pesanan') }}" class="nav__link">
                            <i class='bx bx-cart nav__icon'></i>
                            <span class="nav__name">Pesanan</span>
                        </a>
                    </div>

                    <div class="nav__items">
                        <h3 class="nav__subtitle">Menu</h3>

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-package nav__icon'></i>
                                <span class="nav__name">Produk</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="{{ route('produk.kelola') }}" class="nav__dropdown-item">Produk kamu</a>
                                    <a href="{{ route('produk.upload') }}" class="nav__dropdown-item">Tambah- Produk</a>
                                </div>
                            </div>

                        </div>

                        <a href="{{ route('penjualan') }}" class="nav__link">
                            <i class='bx bxs-truck nav__icon'></i>
                            <span class="nav__name">Pengiriman</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-cog nav__icon'></i>
                            <span class="nav__name">Setelan</span>
                        </a>
                    </div>
                </div>
            </div>

            <a href="#" class="nav__link nav__logout">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>


    <!--========== CONTENTS ==========-->
    <div>
        @yield('content')
    </div>


    <!--========== MAIN JS ==========-->
    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>