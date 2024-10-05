<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','slug',
    ];
    // Jika nama tabel tidak sesuai dengan konvensi Laravel
    
    protected $table = 'categories';
}
