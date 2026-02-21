@extends('layout')

@section('title', $post->titulo)

@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h1 class="card-title">{{ $post->titulo }}</h1>
            <p class="card-text">{{ $post->contenido }}</p>
            <p class="text-muted"><small>Publicado el {{ $post->created_at->format('d/m/Y H:i') }}</small></p>
        </div>
    </div>
    
    <h3 class="mb-3">Comentarios</h3>
    
    @if($post->comments->count() > 0)
        <ul class="list-group mb-4">
            @foreach ($post->comments as $comment)
                <li class="list-group-item">
                    <strong>{{ $comment->autor }}</strong> dijo:
                    <p class="mb-1">{{ $comment->contenido }}</p>
                    <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-muted mb-4">No hay comentarios aún. ¡Sé el primero!</p>
    @endif

    <div class="card bg-light p-3">
        <h4>Añadir un comentario</h4>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comments.store', $post) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="autor" class="form-label">Nombre:</label>
                <input type="text" name="autor" id="autor" class="form-control" value="{{ old('autor') }}" required>
            </div>
            <div class="mb-3">
                <label for="contenido" class="form-label">Comentario:</label>
                <textarea name="contenido" id="contenido" class="form-control" rows="3" required>{{ old('contenido') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Añadir comentario</button>
        </form>
    </div>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
@endsection
