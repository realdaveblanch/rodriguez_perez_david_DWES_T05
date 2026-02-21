@extends('layout')

@section('title', 'Listado de Posts')

@section('content')
    <h1 class="mb-4">Listado de Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Crear nuevo post</a>
    
    <div class="list-group mb-4">
        @foreach ($posts as $post)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ route('posts.show', $post) }}" class="text-decoration-none fw-bold d-block">{{ $post->titulo }}</a>
                    <p class="mb-0 text-muted small">{{ \Illuminate\Support\Str::limit($post->contenido, 100) }}</p>
                </div>
                <div>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-warning me-2">Ver</a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning me-2">Editar</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este post?')">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
