<?php

//TODO: COMANDO USADO EN TERMINAL -> php artisan make:controller PostController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        //? Con el metodo table indicamos que tabla que queremos usar y usamos el metodo get
        $posts = DB::table('posts')->get();

        //? Se retorna a la vista blog 
        return view('blog', ['posts'=> $posts]);
  
    }
}
