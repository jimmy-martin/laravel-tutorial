<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // dd($posts);

        return view('articles', [
            'posts' => $posts,
        ]);
    }

    public function show($id)
    {
        // la méthode findOrFail permet de renvoyer une 404
        // si aucun article ne correspond à cet id
        $post = Post::findOrFail($id);

        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
