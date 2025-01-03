<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PbuPerempuan extends Model
{
    //
    protected $table = 'pbuperempuan'; // Nama tabel di database
    public $timestamps = false; // Tabel tidak memiliki kolom timestamps

    // Kolom yang dapat diakses
    protected $fillable = [
        'id_umur', 'sdmin3', 'sdmin2', 'sdmin1', 'median', 'sd1', 'sd2', 'sd3'
    ];
}
