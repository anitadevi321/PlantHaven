<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ShopdetailsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RenderOtpController;

/// web routes ///
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/shop',  [ShopController::class, 'index'])->name('shop');
Route::get('/contact', [ContactUsController::class, 'index'])->name('contact');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/shop-details', [ShopdetailsController::class, 'index'])->name('shop-details');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');


/// admin routes///
Route::get('/admin', [AdminController::class, 'index'])->name('sign-in');
Route::post('/login', [AdminController::class, 'login'])->name('login');

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');



Route::get('/check', [RenderOtpController::class, 'render_otp'])->name('check');