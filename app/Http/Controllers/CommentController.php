<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        // Créer un nouveau commentaire
        Comment::create([
            'article_id' => $article->id,
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return redirect()->route('articles.index')->with('success', 'Commentaire ajouté avec succès !');
    }
}