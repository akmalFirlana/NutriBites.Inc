<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LocationController;

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/lokasi', [LocationController::class, 'index']);
Route::get('/lokasi/kota/{id_provinsi}', [LocationController::class, 'getCities']);
Route::get('/lokasi/kecamatan/{id_kota}', [LocationController::class, 'getDistricts']);
Route::get('/lokasi/desa/{id_kecamatan}', [LocationController::class, 'getVillages']);
Route::get('/lokasi/form', [LocationController::class, 'showForm']);
Route::get('/tes', function () {
    return view('app');
}) ->name('app');

Route::get('/det', function () {
    return view('layouts.inproduk');
}) ->name('detail');

/*============================================user===========================================*/
Route::get('/', function () {
    return view('User.homepage');
})  ->name('home');

Route::get('/wishlist', function () {
    return view('User.favorit');
})  ->name('favorit');

Route::get('/Kategori', function () {
    return view('User.Kategori');
}) ->name('Kategori');

Route::get('/Promo', function () {
    return view('User.sales');
}) ->name('promo');

Route::get('/login', function () {
    return view('user.login.login');
})  ->name('login');

Route::get('/profil/accounts', function () {
    return view('accounts');
})->name('profil.accounts');

Route::get('/cart', function () {
    return view('user.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('user.checkout');
})->name('checkout');

Route::get('/daftar', function () {
    return view('daftar');
})->name('register');

Route::get('/pembelian', function () {
    return view('user.pembelian');
})->name('pembelian');


/*============================================penjual===========================================*/

Route::get('/Dashboard', function () {
    return view('Penjual.dashboard');
})->name('dashboard');

Route::get('/profil', function () {
    return view('Penjual.profil.profil');
})->name('profil');

Route::get('/profil/keamanan', function () {
    return view('Penjual.profil.keamanan');
})->name('PPass');

Route::get('/profil/pesan', function () {
    return view('Penjual.profil.mail');
})->name('PPesan');

Route::get('/OrderList', function () {
    return view('Penjual.order');
})->name('pesanan');

Route::get('/produk/upload', function () {
    return view('Penjual.produk.upload');
})->name('produk.upload');

Route::get('/produk/pengiriman', function () {
    return view('penjual.produk.pengiriman');
})->name('produk.pengiriman');

Route::get('/produk/kelola_produk', function () {
    return view('Penjual.produk.produk');
})->name('produk.kelola');

Route::get('/penjualan', function () {
    return view('penjual.penjualan');
})->name('penjualan');

Route::get('/setelan', function () {
    return view('Penjual.setelan');
})->name('Psetelan');

Route::get('/logout', function () {
    // Logika logout bisa diterapkan di sini
    return redirect()->route('dashboard');
})->name('logout');