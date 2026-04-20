<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Fajar Yoga Borneo',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima at quae laudantium! Facilis accusantium eius nemo laudantium. Reiciendis repudiandae quasi debitis sequi necessitatibus veritatis repellendus commodi, quibusdam quam placeat quos!'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Fajar Yoga Borneo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex fugiat nisi expedita corrupti placeat repellendus veniam consequatur eius esse magnam odit, perferendis quas. Cumque eligendi sequi dolor expedita odio eius?'
        ]
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
