<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SaleController;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Route otomatis untuk CRUD
Route::resource('suppliers', SupplierController::class);
Route::resource('sales', SaleController::class);
