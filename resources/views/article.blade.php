@extends('layouts.app')

@section('content')
    <h1>{{ $post->content }}</h1>

    <hr>
    @foreach ($post->comments as $comment)
        <div>{{ $comment->content }}</div>
    @endforeach

@endsection
