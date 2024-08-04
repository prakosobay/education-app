<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with(['user', 'tag', 'comments.user'])->get();
        $tags = Tag::all();
        $user = auth()->user();
        return view('user.dashboard', compact('articles', 'tags', 'user'));
    }

    public function indexForGuest()
    {
        $articles = Article::with(['user', 'tag', 'comments.user'])->get();
        $tags = Tag::all();
        return view('user.guest', compact('articles', 'tags'));
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function show($id)
    {
        return Article::find($id);
    }

    public function findArticleById($id)
    {
        $article = Article::with(['user', 'tag', 'comments.user'])->findOrFail($id);
        $tags = Tag::all();
        return view('user.article', compact('article', 'tags'));
    }

    public function newArticle()
    {
        $tags = Tag::all();
        return view('user.article-new', compact('tags'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return response()->json($article, 200);
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return response()->json(null, 204);
    }
}
