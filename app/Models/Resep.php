<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'resep';

    protected $fillable = [
        'nama_resep',
        'vidio',
        'thumbnail',
        'deskripsi',
        'cara_pembuatan',
        'postedby',
        'bahan'
    ];
}
