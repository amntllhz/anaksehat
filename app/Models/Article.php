<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{    
    // Menambahkan kolom yang boleh diisi massal
    protected $fillable = ['judul', 'deskripsi', 'gambar','konten'];

    // Event menghapus gambar saat artikel dihapus
    protected static function booted()
    {
        static::deleting(function ($article) {
            // Menghapus file gambar dari storage/public jika ada
            if ($article->gambar) {
                Storage::disk('public')->delete($article->gambar);
            }
        });
    }
}
