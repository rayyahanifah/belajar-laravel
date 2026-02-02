<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/tambah', [MahasiswaController::class, 'index']);
Route::post('/simpan-mahasiswa', [MahasiswaController::class, 'store']);
