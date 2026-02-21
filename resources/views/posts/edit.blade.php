@extends('layout')

@section('title', 'Editar Post')

@section('content')
    <h1 class="mb-4">Editar Post</h1>
    
    <div class="card p-4">
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $post->titulo }}" required>
            </div>
            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido:</label>
                <textarea name="contenido" id="contenido" class="form-control" rows="5" required>{{ $post->contenido }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
