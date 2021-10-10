@extends('layouts.app')

@section('content')
    <h1>Créer un nouveau poste</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        {{-- Je peux ajouter un token csrf avec @csrf --}}
        @csrf
        <input type="text" name="title" class="border-gray-600 border-2">
        <textarea name="content" cols="30" rows="10" class="border-gray-600 border-2"></textarea>
        <button type="submit" class="bg-green-500">Créer</button>
    </form>
@endsection
