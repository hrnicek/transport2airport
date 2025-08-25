<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/nase-vozy', [CarsController::class, 'index'])->name('cars.index');
Route::get('/cenik', [PricingController::class, 'index'])->name('pricing');
Route::get('/kontakt', [ContactController::class, 'index'])->name('contact');
