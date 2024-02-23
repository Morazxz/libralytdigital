<?php

namespace App\Models;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kategori',
        'judul',
        'penulis',
        'penerbit',
        'thn_penerbit',
        'gambar',

    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
