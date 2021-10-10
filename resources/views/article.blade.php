@extends('layouts.app')

@section('content')
    <h1>{{ $post->content }}</h1>

    <hr>
    @forelse ($post->comments as $comment)
        <div>{{ $comment->content }}</div>
    @empty
        <div>Il n'y a pas de commentaires pour ce poste</div>
    @endforelse

@endsection
