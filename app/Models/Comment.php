<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // protected $fillable = ['content'];
    // Pour ne pas avoir à définir des champs pour lesquels on autorise le mass assignement
    // Et l'autoriser sur tous les champs
    // On peut aussi faire comme ceci
    protected $guarded = [];

    public function commentable()
    {
        return $this->morphTo();
    }
}
