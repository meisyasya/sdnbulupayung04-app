<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwilioNumber extends Model
{
    use HasFactory;
    protected $fillable = ['number', 'is_active'];
}
