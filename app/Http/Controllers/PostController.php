<?php

//TODO: COMANDO USADO EN TERMINAL -> php artisan make:controller PostController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts') -> get();

        return view('blog', ['posts' => $posts]);
    }
}
