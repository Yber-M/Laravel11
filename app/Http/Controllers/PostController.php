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

    public function store(Request $request)
    {
        //? Validar datos del formulario
        $validatedData = $request->validate([
            'correo' => 'required|email|max:100',
            'dni' => 'required|digits:8|unique:posts,dni',
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer|min:0|max:100',
            'titulo' => 'required|string|max:255',
            'cuerpo' => 'required|string|max:2000',
        ]);

        //? Creamos un nuevo post despues de validar los datos
        $cont = 0;
        $post = new Post;
        $post->correo = $validatedData['correo'];
        $post->dni = $validatedData['dni'];
        $post->nombre = $validatedData['nombre'];
        $post->edad = $validatedData['edad'];
        $post->title = $validatedData['titulo'];
        $post->cuerpo = $validatedData['cuerpo'];

        //? Insertamos a la tabla en la DB
        $post->save();

        //? El metodo request permite acceder a los datos enviados en la solicitud
        return redirect()->route('posts.index')->with('success', 'El post "' . $post->title . '" | Fue creado exitosamente');
    }

}
