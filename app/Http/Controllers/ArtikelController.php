<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CommentArtikel, User, Role, MainArtikel};

class ArtikelController extends Controller
{
    public function show($id)
    {
        $artikel = MainArtikel::with('createdBy')->where('is_approve', 1)->findOrFail($id);
        // dd($artikel->createdBy->name);
        return view('artikel.show', compact('artikel'));
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        MainArtikel::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'is_approve' => 0,
            'created_by' => auth()->id(), // Atau ID penulis lainnya jika ada
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('artikel.index')->with('success', 'Artikel telah tersimpan');
    }

    public function edit($id)
    {
        $artikel = MainArtikel::findOrFail($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $artikel = MainArtikel::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        $artikel->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'updated_at' => now(),
        ]);

        return redirect()->route('artikel.show', $id)->with('success', 'Artikel telah terupdate');
    }

    public function destroy($id)
    {
        $artikel = MainArtikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel terhapus');
    }
}
