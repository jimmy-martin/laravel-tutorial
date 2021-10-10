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

        // on peut aussi récupérer un article grace à la valeur d'une des ses colonnes
        // bien utiliser first() au lieu de get() car le where nous retourne un array
        // En utilisant get(), il aurait fallu boucler sur lé resultat pour ne retourner que le premier index
        // On peut préciser le '=', mais par defaut Laravel sait que l'on souhaite un '='
        // donc il n'est pas obligatoire
        // $post = Post::where('title', '=', 'Quidem veritatis praesentium placeat aut iste.')->firstOrFail();
        // dd($post);

        return view('article', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        // Ceci est la façon de faire qu'on a utilisé pour construire une API avec Lumen en formation
        // $post = new Post();

        // $post->title = $request->title;
        // $post->content = $request->content;

        // $post->save();

        // Une meilleure façon de faire est celle-ci
        // Il faudra donc permettre le mass assignement sur les champs voulus dans le Model Post au préalable (voir model Post)
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);



        dd('Poste crée !');
    }

    public function contact()
    {
        return view('contact');
    }
}
