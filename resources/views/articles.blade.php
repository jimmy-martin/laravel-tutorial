@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold">Liste des articles</h1>
    @if ($posts->count() > 0)
        @foreach($posts as $post)
            <h3><a class="hover:text-red-700" href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
        @endforeach
    @else
        <span>Aucun poste en base de données</span>
    @endif
@endsection
