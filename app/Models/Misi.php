<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;

    protected $table = 'misi'; // Nama tabel di database

    protected $fillable = [
        'title', 'description'
    ];

    // Jika Anda perlu menambahkan hubungan atau metode lainnya, tambahkan di sini.
}
