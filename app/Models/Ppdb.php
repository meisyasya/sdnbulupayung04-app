<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'photo', 
    ];
    
    // Jika nama tabel tidak sesuai dengan konvensi Laravel
    
    protected $table = 'ppdb';
}
