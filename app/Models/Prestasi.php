<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','description','image'
    ];
    // Jika nama tabel tidak sesuai dengan konvensi Laravel
    protected $table = 'prestasi';
}

