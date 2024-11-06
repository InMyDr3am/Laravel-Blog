<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'slug', 'body'];
    // public static function all()
    // {
    //     return [
    //         [
    //             'id' => '1',
    //             'slug' => 'judul-artikel-1',
    //             'title' => 'Artikel 1',
    //             'author' => 'Fauzi R',
    //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
    //             Iusto et nobis soluta provident autem repellendus nemo, 
    //             nesciunt delectus veritatis reprehenderit minima maxime 
    //             impedit dolorum rerum ipsam repellat assumenda. 
    //             Recusandae, architecto?'
    //         ],
    //         [
    //             'id' => '2',
    //             'slug' => 'judul-artikel-2',
    //             'title' => 'Artikel 2',
    //             'author' => 'Fauzi R',
    //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
    //             Iusto et nobis soluta provident autem repellendus nemo, 
    //             nesciunt delectus veritatis reprehenderit minima maxime 
    //             impedit dolorum rerum ipsam repellat assumenda. 
    //             Recusandae, architecto?'
    //         ]
    //     ];
    // }

    // public static function find($slug): array
    // {
    //     // return Arr::first(static::all(), function ($post) use ($slug){
    //     //     return $post['slug'] == $slug;
    //     // });

    //     $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        
    //     if(!$post) {
    //         abort(404);
    //     }
        
    //     return $post;
        
    // }
}