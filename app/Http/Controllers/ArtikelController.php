<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::where('tgl_published')->latest()->paginate(6);

        return view('artikel.index', compact('artikels'));
    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        return view('artikel.detailArtikel', compact('artikel'));
    }
    
}
