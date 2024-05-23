<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//* Definimos nesutra ruta
Route::view('/', 'welcome')->name('home');

Route::view('/contacto', 'contacto')->name('contact');

Route::get('/blog', [PostController::class, 'index'])->name('blog');

Route::view('/about', 'about')->name('about');

