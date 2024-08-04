<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::all();
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
        ]);
        /*$validatedData = $request->validate([
            'content' => 'required|string|max:255',
        ]);*/
        Comment::create([
            'content' => $request->content,
            'user_id' => auth()->id(), // Pastikan user sudah login
            'article_id' => $id,
        ]);

        return redirect()->back();
    }

    public function show($id)
    {
        return Comment::find($id);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return response()->json($comment, 200);
    }

    public function destroy($id)
    {
        Comment::destroy($id);
        return response()->json(null, 204);
    }
}
