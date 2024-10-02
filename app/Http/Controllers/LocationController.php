<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LocationController extends Controller
{


    // Menampilkan halaman lokasi
    public function index()
    {
        $provinces = Http::get('https://farizdotid.com/api/daerahindonesia/provinsi')->json();
        return view('location.index', ['provinces' => $provinces['provinsi']]);
    }

    // Mendapatkan data Kota berdasarkan Provinsi
    public function getCities($id_provinsi)
    {
        $cities = Http::get("https://farizdotid.com/api/daerahindonesia/kota?id_provinsi=$id_provinsi")->json();
        return response()->json($cities['kota_kabupaten']);
    }

    // Mendapatkan data Kecamatan berdasarkan Kota
    public function getDistricts($id_kota)
    {
        $districts = Http::get("https://farizdotid.com/api/daerahindonesia/kecamatan?id_kota=$id_kota")->json();
        return response()->json($districts['kecamatan']);
    }

    // Mendapatkan data Desa berdasarkan Kecamatan
    public function getVillages($id_kecamatan)
    {
        $villages = Http::get("https://farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=$id_kecamatan")->json();
        return response()->json($villages['kelurahan']);
    }
    public function showForm()
    {
        // Ambil data dari API
        $response = Http::get('https://farizdotid.com/api/daerahindonesia/provinsi');

        // Cek apakah request ke API berhasil
        if ($response->successful()) {
            $provinces = $response->json()['provinsi'];

            // Menampilkan data provinsi di layar untuk memeriksa formatnya
            dd($provinces);  // Ini akan menghentikan eksekusi dan menampilkan isi $provinces

            // Kirim data ke view
            return view('tes', ['provinces' => $provinces]);
        } else {
            return view('tes', ['provinces' => []]);
        }
    }



}

