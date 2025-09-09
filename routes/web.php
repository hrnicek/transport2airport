<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/nase-vozy', [CarsController::class, 'index'])->name('cars.index');
Route::get('/cenik', [PricingController::class, 'index'])->name('pricing');
Route::get('/kontakt', [ContactController::class, 'index'])->name('contact');

Route::get('/poptavka/{demand:uuid}', [DemandsController::class, 'success'])->name('demands.success');

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
