<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.dashboard', ['type_menu' => 'dashboard']);
    })->name('home');

    Route::resource('users', UserController::class);
    //category
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    //product
    Route::resource('product', \App\Http\Controllers\ProductController::class);
});
