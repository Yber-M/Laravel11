<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//* Definimos nesutra ruta
// ('Aca va el nombre de la ruta'), ()
Route::view('/contact', 'contacto')->name('contacto');

Route::view('/home', 'inicio')->name('inicio');

Route::get('/blogg', [PostController::class, 'index'])->name('blog');

Route::view('/abouting', 'about')->name('about');

