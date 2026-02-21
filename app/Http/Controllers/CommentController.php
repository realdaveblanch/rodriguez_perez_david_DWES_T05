<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'autor' => 'required|string|max:255',
            'contenido' => 'required|string|min:3',
        ]);

        // Usamos validated() para asegurarnos de que solo entran los datos validados
        $post->comments()->create($request->only(['autor', 'contenido']));

        return redirect()->route('posts.show', $post)->with('success', 'Comentario añadido correctamente.');
    }
}
