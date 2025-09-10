<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeywordsController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get(LaravelLocalization::transRoute('routes.cars'), [CarsController::class, 'index'])->name('cars.index');
    Route::get(LaravelLocalization::transRoute('routes.pricing'), [PricingController::class, 'index'])->name('pricing');
    Route::get(LaravelLocalization::transRoute('routes.contact'), [ContactController::class, 'index'])->name('contact');
    Route::get(LaravelLocalization::transRoute('routes.keywords'), [KeywordsController::class, 'index'])->name('keywords');

    Route::get(LaravelLocalization::transRoute('routes.demands.success'), [DemandsController::class, 'success'])->name('demands.success');
});

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
