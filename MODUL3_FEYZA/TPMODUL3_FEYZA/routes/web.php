<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// ==================1==================
Route::get('/dashboard', [DashboardController::class, 'index']);