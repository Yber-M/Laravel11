<?php

use Illuminate\Support\Facades\Route;

$posts = [
    ['title' => 'First Post'],
    ['title' => 'Second Post'],
    ['title' => 'Thir Post'],
    ['title' => 'Fourth Post']
];

Route::view('/', 'welcome')->name('home');

Route::view('/contacto', 'contacto', ['posts' => $posts])->name('contact');

Route::view('/blog', 'blog')->name('blog');

Route::view('/about', 'about')->name('about');
