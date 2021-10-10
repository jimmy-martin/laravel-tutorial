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
        // $post = Post::findOrFail($id);

        // on peut aussi récupérer un article grace à la valeur d'une des ses colonnes
        // bien utiliser first() au lieu de get() car le where nous retourne un array
        // En utilisant get(), il aurait fallu boucler sur lé resultat pour ne retourner que le premier index
        // On peut préciser le '=', mais par defaut Laravel sait que l'on souhaite un '='
        // donc il n'est pas obligatoire
        $post = Post::where('title', '=', 'Quidem veritatis praesentium placeat aut iste.')->firstOrFail();
        // dd($post);

        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
