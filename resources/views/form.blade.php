@extends('layouts.app')

@section('content')
    <h1 class="my-2 text-2xl">Créer un nouveau poste</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        {{-- Je peux ajouter un token csrf avec @csrf --}}
        @csrf
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Titre du poste</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <input type="text" name="title" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Le titre de votre poste">
            </div>
        </div>
        <div class="mt-2">
            <label for="price" class="block text-sm font-medium text-gray-700">Contenu du poste</label>
            <div class="mt-1 relative rounded-md shadow-sm">
            <textarea name="content" cols="30" rows="10" class="resize border rounded-md focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300"></textarea>
            </div>
        </div>
        <div>
            <button type="submit" class="mt-2 py-2 px-4 btn bg-blue-500 font-semibold rounded-lg shadow-md text-white transform motion-safe:hover:scale-110">Créer</button>
        </div>
    </form>
@endsection
