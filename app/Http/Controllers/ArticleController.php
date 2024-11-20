<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        // ambil semua data artikel dan ubah created_at menjadi format week ago
        $articles = Article::all()->map(function ($article) {
            $article->created_at_human = $article->created_at->diffForHumans();
            return $article;
        });

        // kirim data artikel ke view
        return view('berita', compact('articles'));
    }

    public function show($id)
    {   
        // cari artikel berdasarkan id
        $article = Article::find($id);

        // ubah created_at menjadi format week ago
        $article->created_at_human = $article->created_at->diffForHumans();

        // kirim data artikel ke view
        return view('detail', compact('article'));
    }
}
