<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    use HasFactory;
    protected $table = 'visi'; // Nama tabel di database

    protected $fillable = [
        'judul', 'deskripsi_1', 'deskripsi_2', 'photo'
    ];

}
