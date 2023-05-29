<?php

use App\Http\Controllers\email;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|*/

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});
Route::get('/blog', function () {
    return view('blog');
});


Route::get('/dash', function () {
    return view('dashboard');
});

Route::post('/email', [email::class, 'sendemail']);
