<?php

//TODO: COMANDO USADO EN TERMINAL -> php artisan make:controller PostController

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        //? Con el metodo table indicamos que tabla que queremos usar y usamos el metodo get
        $posts = Post::get();  
        
        //? Se retorna a la vista blog 
        return view('posts.index', ['posts'=> $posts]);
  
    }

    //* CRUD
    public function show(Post $post) { 
        //OjO -> Cuando lo definimos el Post nos saltamos el paso de la linea 25(TypeHints)
        //? findOrFail es para que nos mande a un error 404 cuando no haya una URL correcta
        // return Post::findOrFail($post);
        // return $post;
        return view('posts.show', ['post'=> $post]);
    }

    public function create() {
        return view('posts.crear');
    }

    public function update() {
        return view('posts.actualizar');
    }

    public function delete() {
        return view('posts.eliminar');
    }

    public function store()
    {
        return 'Agregado con exito y de forma segura. Felicitaciones';
    }

}
