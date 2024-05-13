<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Frontend.index');
});

Route::get('/about', function () {
    return view('Frontend.menu.about');
});  

Route::get('/cart', function () {
    return view('Frontend.menu.cart');
});  

Route::get('/checkout', function () {
    return view('Frontend.menu.checkout');
});

Route::get('/confirmation', function () {
    return view('Frontend.menu.confirmation');
});

Route::get('/contact', function () {
    return view('Frontend.menu.contact');
});

Route::get('/login', function () {
    return view('Frontend.menu.login');
});

Route::get('/product_list', function () {
    return view('Frontend.menu.product_list');
});

Route::get('/single_product', function () {
    return view('Frontend.menu.single_product');
});


    
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
