<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{    
    // Menambahkan kolom yang boleh diisi massal
    protected $fillable = ['judul', 'deskripsi', 'gambar','konten'];
}
