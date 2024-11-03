<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Pest\Support\Arr as SupportArr;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Halaman Blog', 'posts' => Post::all()]);
});


Route::get('/posts/{slug}', function($slug){
   
    //khusus untuk array

   $post = Post::find($slug);

   return view('post', ['title' => 'Single Post', 'post' => $post]);


});

Route::get('/about', function () {
    return view('about', ['title' => 'Halaman About']);
});



Route::get('/contact', function () {
    return view('contact', ['title' => 'Halaman Contact']);
});
