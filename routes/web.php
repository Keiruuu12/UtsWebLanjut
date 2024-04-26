<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

route::redirect('/', 'home');

Route::get('/home', [MahasiswaController::class, 'index'])->name('index');

Route::get('/produk', [MahasiswaController::class, 'show'])->name('produk.show');


Route::post('/produk', [MahasiswaController::class, 'store'])->name('produk.store');
Route::get('/tambah', [MahasiswaController::class, 'create'])->name('produk.create');