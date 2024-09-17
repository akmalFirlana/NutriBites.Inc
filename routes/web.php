<?php

use Illuminate\Support\Facades\Route;

Route::get('/tes', function () {
    return view('app');
});

Route::get('/det', function () {
    return view('layouts.inproduk');
});

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