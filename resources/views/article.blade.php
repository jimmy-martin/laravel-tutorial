@extends('layouts.app')

@section('content')
    <h1>{{ $post->content }}</h1>

    <hr>
    @forelse ($post->comments as $comment)
        <div>{{ $comment->content }} | crée le {{ $comment->created_at->format('d/m/Y') }} </div>
    @empty
        <div>Il n'y a pas de commentaires pour ce poste.</div>
    @endforelse

@endsection
