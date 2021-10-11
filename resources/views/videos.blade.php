@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold">Liste des vidéos</h1>
    @if ($videos->count() > 0)
        @foreach($videos as $video)
            <h3><a class="hover:text-red-700" href="{{ route('videos.item', ['id' => $video->id]) }}">{{ $video->title }}</a></h3>
        @endforeach
    @else
        <span>Aucune vidéo en base de données</span>
    @endif

@endsection
