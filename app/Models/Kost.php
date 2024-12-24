<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    protected $table = 'kosts';
    protected $fillable = [
        'nama',
        'deskripsi',
        'tipe',
        'alamat',
        'status',
        'harga',
        'stock',
        'image'
    ];
}
