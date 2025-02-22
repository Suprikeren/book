<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'judul', 'penulis', 'tahun_terbit', 'deskripsi',
    ];
}
