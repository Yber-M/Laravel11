<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');

Route::view('/contacto', 'contacto')->name('contact');

Route::get('/blog', function () {
    $posts = [
        ['title' => 'First Post'],
        ['title' => 'Second Post'],
        ['title' => 'Thir Post'],
        ['title' => 'Fourth Post']
    ];

    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::view('/about', 'about')->name('about');
