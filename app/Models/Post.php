<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Fajar Yoga Borneo',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima at quae laudantium! Facilis accusantium eius nemo laudantium. Reiciendis repudiandae quasi debitis sequi necessitatibus veritatis repellendus commodi, quibusdam quam placeat quos!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Fajar Yoga Borneo',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex fugiat nisi expedita corrupti placeat repellendus veniam consequatur eius esse magnam odit, perferendis quas. Cumque eligendi sequi dolor expedita odio eius?'
            ]
    ];
    }

    public static function find($slug)
    {


        return Arr::first(static::all(), fn($post) =>  $post['slug'] == $slug) ?? abort(404);
    }
}
