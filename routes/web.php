<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Fauzi Ramdhani',  'title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Fauzi R',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Iusto et nobis soluta provident autem repellendus nemo, 
            nesciunt delectus veritatis reprehenderit minima maxime 
            impedit dolorum rerum ipsam repellat assumenda. 
            Recusandae, architecto?'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-1',
            'title' => 'Artikel 2',
            'author' => 'Fauzi R',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Iusto et nobis soluta provident autem repellendus nemo, 
            nesciunt delectus veritatis reprehenderit minima maxime 
            impedit dolorum rerum ipsam repellat assumenda. 
            Recusandae, architecto?'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Fauzi R',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Iusto et nobis soluta provident autem repellendus nemo, 
            nesciunt delectus veritatis reprehenderit minima maxime 
            impedit dolorum rerum ipsam repellat assumenda. 
            Recusandae, architecto?'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Artikel 2',
            'author' => 'Fauzi R',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Iusto et nobis soluta provident autem repellendus nemo, 
            nesciunt delectus veritatis reprehenderit minima maxime 
            impedit dolorum rerum ipsam repellat assumenda. 
            Recusandae, architecto?'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

