@extends('layouts.app')

@section('content')
    <h1 class="text-2xl">{{ $video->title }}</h1>

    <span>
        {{ $video->url??'Pasd\'url!' }}
    </span>

    <hr>
    @forelse ($video->comments as $comment)
        <div>{{ $comment->content }} | crée le {{ $comment->created_at->format('d/m/Y') }}</div>
    @empty
        <div>Aucun commentaire pour cette vidéo.</div>
    @endforelse

@endsection
