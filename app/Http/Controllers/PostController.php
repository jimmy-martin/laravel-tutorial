<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = [
            'Mon super premier titre',
            'Mon super deuxième titre'
        ];

        return view('articles', compact('post'));
    }
}
