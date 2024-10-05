<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'slug', 'desc', 'img', 'views', 'status', 'publish_date'];

    // relasi ke category(agar memanggil nama bukan angka di table )
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class); 
    }
}

