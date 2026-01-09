<?php

use App\Http\Controllers\bybrandController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\katalogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/katalog', [katalogController::class, 'index'])->name('katalog');

Route::get('/galeri', [galeriController::class, 'index'])->name('galeri');

Route::get('/bybrand', [bybrandController::class, 'index'])->name('bybrand');





