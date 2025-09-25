<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Halaman Template Statis
Route::group([], function () {
    Route::get('/home', function () {
        return view('static.landing-page');
    })->name('home');

    Route::get('/login', function () {
        return view('static.login');
    })->name('login');

    Route::get('/dashboard', function () {
        return view('static.dashboard');
    })->name('dashboard');
});