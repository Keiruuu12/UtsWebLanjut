<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

route::redirect('/', 'home');

Route::get('/home', [MahasiswaController::class, 'index']);

Route::get('/produk', [MahasiswaController::class, 'show']);

Route::get('/tambah', [MahasiswaController::class, 'create']);