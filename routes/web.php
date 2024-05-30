<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/shot-details', function () {
    return view('shot-details');
})->name('shot-details');

Route::get('/cart', function(){
    return view('cart');
})->name('cart');

Route::get('/checkout', function(){
    return view('checkout');
})->name('checkout');


Route::get('/admin', function(){
    return view('admin.index');
})->name('admin');



/// admin panel routes///
Route::get('/sign-in', function(){
    return view('admin.sign-in');
})->name('sign-in');

Route::get('/sign-up', function(){
    return view('admin.sign-up');
})->name('sign-up');