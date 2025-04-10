<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('articles.create');
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

        return redirect()->route('articles.index')->with('success', __('__message-article.create_success'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}