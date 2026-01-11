<?php

use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\accessoriesController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\bybrandController;
use App\Http\Controllers\chillerController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\katalogController;
use App\Http\Controllers\product1Controller;
use App\Http\Controllers\product2Controller;
use App\Http\Controllers\product3Controller;
use App\Http\Controllers\product4Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/katalog', [katalogController::class, 'index'])->name('katalog');

Route::get('/galeri', [galeriController::class, 'index'])->name('galeri');

Route::get('/bybrand', [bybrandController::class, 'index'])->name('bybrand');

Route::get('/aboutUs', [aboutUsController::class, 'index'])->name('aboutUs');

Route::get('/artikel', [artikelController::class, 'index'])->name('artikel');

Route::get('/product1', [product1Controller::class, 'index'])->name('product1');

Route::get('/product2', [product2Controller::class, 'index'])->name('product2');

Route::get('/product3', [product3Controller::class, 'index'])->name('product3');

Route::get('/product4', [product4Controller::class, 'index'])->name('product4');

Route::get('/accessories', [accessoriesController::class, 'index'])->name('accessories');

Route::get('/chiller', [chillerController::class, 'index'])->name('chiller');

Route::get('/sewa', [chillerController::class, 'index'])->name('sewa');

Route::get('/instalasi', [chillerController::class, 'index'])->name('instalasi');











