<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Cette propriété permet d'utiliser la méthode statique create() pour créer un nouveau poste, en permettant le mass assignement sur les champs contenus dans le tableau
     *
     * @var array
     */
    protected $fillable = ['title', 'content'];
}
