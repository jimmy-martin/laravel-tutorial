<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // ======================
        // Modification
        // ======================

        // Pour modifier un poste on peut procéder de cette façon
        // $post = Post::find(1);

        // $post->update([
        //     'title' => 'Titre mis à jour'
        // ]);

        // ======================
        // Suppression
        // ======================

        // Pour supprimer un poste
        // $post = Post::findOrFail(12);
        // $post->delete();


        // ===============================
        // Affichage de tous les postes
        // ===============================

        $posts = Post::all();

        // On peut utiliser Eloquent pour afficher les postes dans un certain ordre, ou en afficher qu'un certain nombre
        // $posts = Post::orderBy('title')
        //     ->take(3)
        //     ->get();
        // dd($posts);

        return view('articles', [
            'posts' => $posts,
            'video' => Video::findOrFail(1),
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
        $request->validate([
            'title' => ['required', 'max:255', 'min:5', 'unique:posts', new Uppercase],
            'content' => ['required'],
        ]);

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
    }

    public function contact()
    {
        return view('contact');
    }

    public function register()
    {
        $post = Post::findOrFail(11);
        $video = Video::findOrFail(1);

        $comment1 = new Comment(['content' => 'Mon premier commentaire']);
        $comment2 = new Comment(['content' => 'Mon second commentaire']);

        $post->comments()->saveMany([
            $comment1,
            $comment2
        ]);


        $comment3 = new Comment(['content' => 'Mon troisième commentaire']);

        $video->comments()->save($comment3);
    }
}
