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
}
