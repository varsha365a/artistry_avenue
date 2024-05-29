<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

//upload image crud

Route::post('upload',[UploadController::class, 'store']);


//frontend routes

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

// Backend routes

Route::get('/index', function () {
    return view('Backend.index');
});

Route::get('/orders', function () {
    return view('Backend.menu.orders');
});

Route::get('/upload', function () {
    return view('Backend.menu.upload');
});

Route::get('/authentication-login', function () {
    return view('Backend.menu.authentication-login');
});

Route::get('/icon-tabler', function () {
    return view('Backend.menu.icon-tabler');
});

Route::get('/sample-page', function () {
    return view('Backend.menu.sample-page');
});

Route::get('/authentication-register', function () {
    return view('Backend.menu.authentication-register');
});

Route::get('/ui-alerts', function () {
    return view('Backend.menu.ui-alerts');
});

Route::get('/ui-buttons', function () {
    return view('Backend.menu.ui-buttons');
});

Route::get('/ui-card', function () {
    return view('Backend.menu.ui-card');
});

Route::get('/ui-forms', function () {
    return view('Backend.menu.ui-forms');
});

Route::get('/ui-typography', function () {
    return view('Backend.menu.ui-typography');
});

//backend routes end.


    
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



Route::post('/test/store',[TestController::class, 'store'])->name('test.store');

Route::get('/test/create', [TestController::class, 'create']);


require __DIR__.'/auth.php';
