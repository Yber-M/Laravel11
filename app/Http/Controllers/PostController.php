<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = [
            ['title' => 'First Post'],
            ['title' => 'Second Post'],
            ['title' => 'Thir Post'],
            ['title' => 'Fourth Post']
        ];

        return view('blog', ['posts'=> $posts]);
    }
}
