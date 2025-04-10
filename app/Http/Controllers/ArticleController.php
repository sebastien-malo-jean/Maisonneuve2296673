<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('user')
            ->orderby('created_at', 'desc')
            ->paginate(10);

        return view('article.index', ["articles" => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_fr' => 'required|string|max:255',
            'content_fr' => 'required|string',
            'title_en' => 'required|string|max:255',
            'content_en' => 'required|string',
        ]);

        $article = new Article();
        $article->user_id = Auth::id();
        $article->title_fr = $request->title_fr;
        $article->content_fr = $request->content_fr;
        $article->title_en = $request->title_en;
        $article->content_en = $request->content_en;
        $article->save();

        return redirect()->route('articles.index')->with('success', __('lang.__message-article-create-success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $article->load('user', 'comments.user');

        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        if (auth()->user()->id !== $article->user_id) {
            return redirect()->route('articles.index')->with('error', __('lang.__message-article-edit-error'));
        }

        return view('article.edit', compact('article'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        if (auth()->user()->id !== $article->user_id) {
            return redirect()->route('articles.index')->with('error', __('lang.__message-article-update-error'));
        }

        $request->validate([
            'title_fr' => 'required|string|max:255',
            'content_fr' => 'required|string',
            'title_en' => 'required|string|max:255',
            'content_en' => 'required|string',
        ]);

        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', __('lang.__message-article-updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        // Vérifier si l'utilisateur authentifié est l'auteur de l'article
        if (auth()->user()->id !== $article->user_id) {
            return redirect()->route('articles.index')->with('error', __('lang.__message-article-delete-error'));
        }

        // Supprimer l'article
        $article->delete();

        return redirect()->route('articles.index')->with('success', __('lang.__message-article-delete-success'));
    }
}
