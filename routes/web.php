<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//* Definimos nesutra ruta
Route::view('/', 'contacto')->name('contacto');

Route::view('/inicio', 'inicio')->name('inicio');

Route::get('/blog', [PostController::class, 'index'])->name('blog');

Route::view('/about', 'about')->name('about');

