<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('index',[IndexController::class,'index'])->name('front.index');

Route::get('about',[IndexController::class,'about'])->name('front.abt');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require _DIR_.'/auth.php';

?>