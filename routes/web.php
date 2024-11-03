<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Pest\Support\Arr as SupportArr;

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

Route::get('/posts', function () {
    return view('posts', ['title' => 'Halaman Blog', 'posts' => [
    [
        'id' => '1',
        'slug' => 'judul-artikel-1',
        'title' => 'judul artikel 1',
        'author' => 'ahmad mulia huda',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem magnam, a aliquam, sed voluptatem dolorem ipsa nostrum eos corrupti, possimus repellat consectetur velit veniam cum quod. Officia fuga iure dolorum.'
    ],
    [
        'id' => '2',
        'slug' => 'judul-artikel-2',
        'title' => 'judul artikel 2',
        'author' => 'ahmad mulia huda',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem magnam, a aliquam, sed voluptatem dolorem ipsa nostrum eos corrupti, possimus repellat consectetur velit veniam cum quod. Officia fuga iure dolorum.'
    ]]]);
});


Route::get('/posts/{id}', function($slug){
   $posts = [
    [
        'id' => '1',
        'slug' => 'judul-artikel-1',
        'title' => 'judul artikel 1',
        'author' => 'ahmad mulia huda',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem magnam, a aliquam, sed voluptatem dolorem ipsa nostrum eos corrupti, possimus repellat consectetur velit veniam cum quod. Officia fuga iure dolorum.'
    ],
    [
        'id' => '2',
        'slug' => 'judul-artikel-2',
        'title' => 'judul artikel 2',
        'author' => 'ahmad mulia huda',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem magnam, a aliquam, sed voluptatem dolorem ipsa nostrum eos corrupti, possimus repellat consectetur velit veniam cum quod. Officia fuga iure dolorum.'
    ]
];

    //khusus untuk array

   $post = Arr::first($posts, function ($post) use ($slug){
    return $post['slug'] == $slug;
   });

   return view('post', ['title' => 'Single Post', 'post' => $post]);


});

Route::get('/about', function () {
    return view('about', ['title' => 'Halaman About']);
});



Route::get('/contact', function () {
    return view('contact', ['title' => 'Halaman Contact']);
});
