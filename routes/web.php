<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Halaman Blog']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Halaman About']);
});



Route::get('/contact', function () {
    return view('contact', ['title' => 'Halaman Contact']);
});
