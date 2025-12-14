<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'artikel';
    public $timestamps = false;

    protected $fillable = ['judul', 'konten', 'gambar', 'tanggal', 'penulis'];
}
