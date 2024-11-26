<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FeedbackController;
use League\Uri\FeatureDetection;

Route::get('/', function () {
    return view('home');
});

// Route::get('/berita', function () {
//     return view('berita');
// });

Route::get('/berita', [ArticleController::class, 'index']);
Route::get('/berita/{id}', [ArticleController::class, 'show']);
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
