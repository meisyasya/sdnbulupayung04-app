<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul','subjudul',
    ];
    // Jika nama tabel tidak sesuai dengan konvensi Laravel
    
    protected $table = 'contacts';
    
}
