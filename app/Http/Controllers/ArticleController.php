<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        // ambil semua data artikel
        $articles = Article::all();

        // kirim data artikel ke view
        return view('berita', compact('articles'));
    }
}
