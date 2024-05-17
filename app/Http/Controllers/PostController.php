<?php

namespace App\Http\Controllers;

class PostController
{
    public function __invoke() {
        $posts = [
            ['title' => 'First Post'],
            ['title' => 'Second Post'],
            ['title' => 'Thir Post'],
            ['title' => 'Fourth Post']
        ];

        return view('blog', ['posts'=> $posts]);
    }
}
