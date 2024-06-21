<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

//Routes for admin controller
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/register', [AdminController::class, 'showRegisterForm'])->name('admin.register'); // Add this line
    Route::post('/register', [AdminController::class, 'createAdmin'])->name('admin.register.post');
});

//Routes for post controller
Route::resource('posts', PostController::class);
// returns the home page with all posts
Route::get('/', PostController::class .'@index')->name('posts.index');
// returns the form for adding a post
Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// adds a post to the database
Route::post('/posts', PostController::class .'@store')->name('posts.store');
// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// updates a post
Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// deletes a post
Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');


//frontend routes

Route::get('/',[IndexController::class,'home'])->name('front.home');

Route::get('about',[IndexController::class,'about'])->name('front.abt');

Route::get('artset',[IndexController::class,'artset'])->name('front.artset');

Route::get('cart',[IndexController::class,'cart'])->name('front.cart');

Route::get('category',[IndexController::class,'category'])->name('front.category');

Route::get('checkout',[IndexController::class,'checkout'])->name('front.checkout');

Route::get('confirmation',[IndexController::class,'confirmation'])->name('front.confirmation');

Route::get('contact_process',[IndexController::class,'contact_process'])->name('front.contact_process');

Route::get('contact',[IndexController::class,'contact'])->name('front.contact');

Route::get('logins',[IndexController::class,'logins'])->name('front.logins');

Route::get('product_list',[IndexController::class,'product_list'])->name('front.product_list');


//backend routes

Route::get('auth_login',[IndexController::class,'auth_login'])->name('back.auth_login');

Route::get('auth_register',[IndexController::class,'auth_register'])->name('back.auth_register');

Route::get('orders',[IndexController::class,'orders'])->name('back.orders');

Route::get('sample',[IndexController::class,'sample'])->name('back.sample');

Route::get('upload',[IndexController::class,'upload'])->name('back.upload');

Route::get('index',[IndexController::class,'index'])->name('back.index');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


?>