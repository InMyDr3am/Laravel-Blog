<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Fauzi Ramdhani',  'title' => 'About Page']);
});

// Route::get('/posts', function () {
//     return view('posts', ['title' => 'Blog', 'posts' => Post::all() ]);
// });
Route::get('/posts', function () {
    //$post = Post::all();

    //eager load
    // $post = Post::with(['author','category'])->latest()->get();

    $post = Post::latest()->get();

    
    return view('posts', ['title' => 'Blog', 'posts' => $post ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    //dipakai untuk lazy eager load. tanpa ini juga bisa
    // $posts = $user->posts->load('category', 'author');

    return view('posts', ['title' => count($user->posts) . ' ' . 'Articles By ' . $user->name , 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    //dipakai untuk lazy eager load. tanpa ini juga bisa
    // $posts = $category->posts->load('category', 'author');


    return view('posts', ['title' => 'Articles in ' . $category->name , 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

