<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [MahasiswaController::class, 'index']);

Route::get('/produk', [MahasiswaController::class, 'show']);

Route::get('produk', function()
{
    $produks = [
    [
        'kode_produk' => 'BRG001',
        'nama_produk' => 'Pena',
        'jenis_produk' => 'Alat Tulis',
        'harga' => '20000'
    ],
    [
        'kode_produk' => 'BRG002',
        'nama_produk' => 'Buku',
        'jenis_produk' => 'Alat Tulis',
        'harga' => '15000'   
    ]
    ];

    return view('produk', ['produks' => $produks]);
});

Route::get('/tambah', [MahasiswaController::class, 'create']);