<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'subjudul',
        'deskripsi_1',
        'deskripsi_2',
        'kelebihan_1',
        'kelebihan_2',
        'kelebihan_3',
        'kelebihan_4',
        'kelebihan_5',
        'kelebihan_6',
        'kelebihan_7',
        'kelebihan_8',
        'kelebihan_9',
        'photo', // Tambahkan ini jika Anda ingin mengisi kolom foto
    ];
    
    // Jika nama tabel tidak sesuai dengan konvensi Laravel
    
    protected $table = 'about';
}
