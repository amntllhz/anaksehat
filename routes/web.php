<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('home');
});

// Route::get('/berita', function () {
//     return view('berita');
// });

Route::get('/berita', [ArticleController::class, 'index']);
