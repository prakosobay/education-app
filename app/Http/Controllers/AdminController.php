<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Article::with(['user', 'tag', 'comments.user'])->get();
        // dd($articles);
        return view('admin.artikel', compact('articles'));
    }

    public function approve_article($id)
    {
        $article = Article::findOrFail($id);
        $article->update([
            'is_apprv' => true,
            'apprv_by' => Auth::user()->id
        ]);
        return redirect()->back()->with('status', 'Article approved successfully!');
    }

    public function view($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.artikelDetail', compact('article'));
    }
}
