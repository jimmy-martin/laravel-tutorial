@extends('layouts.app')

@section('content')
    <h1>{{ $post->content }}</h1>

    <span>
        {{ $post->image ? $post->image->path : 'Pas d\'image !' }}
    </span>

    <hr>
    @forelse ($post->comments as $comment)
        <div>{{ $comment->content }} | crée le {{ $comment->created_at->format('d/m/Y') }} </div>
    @empty
        <div>Aucun commentaire pour ce poste.</div>
    @endforelse
    <hr>

    @forelse ($post->tags as $tag)
        <div>{{ $tag->name }}</div>
    @empty
        <div>Aucun tag pour ce poste.</div>
    @endforelse

@endsection
