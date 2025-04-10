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

    public function update(Request $request, Article $article, Comment $comment)
    {
        // Vérifier si l'utilisateur authentifié est l'auteur du commentaire
        if (auth()->user()->id !== $comment->user_id) {
            return redirect()->back()->with('error', __('lang.__message-comment-cannot-uptdate'));
        }

        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        // Mettre à jour le commentaire
        $comment->update(['content' => $request->input('content')]);

        return redirect()->route('articles.show', $article->id)->with('success', __('lang.__message-comment-updated'));
    }


    public function edit(Article $article, Comment $comment)
    {
        // Logique d'édition du commentaire
        return view('comments.edit', compact('article', 'comment'));
    }

    public function destroy(Article $article, Comment $comment)
    {
        // Vérifier si l'utilisateur authentifié est l'auteur du commentaire
        if (auth()->user()->id !== $comment->user_id) {
            return redirect()->route('articles.show', $article->id)->with('error', __('lang.__message-comment-cannot-delete'));
        }

        // Supprimer le commentaire
        $comment->delete();

        return redirect()->route('articles.show', $article->id)->with('success', __('lang.__message-comment-deleted'));
    }
}