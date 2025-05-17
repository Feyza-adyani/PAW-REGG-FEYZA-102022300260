<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// TODO: Import controller MahasiswaController
use App\Http\Controllers\Api\MahasiswaController;


// TODO: Buat route untuk menangani request
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);
