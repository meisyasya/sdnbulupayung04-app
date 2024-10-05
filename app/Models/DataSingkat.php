<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSingkat extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa',
        'guru',
        'tenagakependidikan',
        
    ];
    
    // Jika nama tabel tidak sesuai dengan konvensi Laravel
    // protected $table = 'datasingkats';
}
