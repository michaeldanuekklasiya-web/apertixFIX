<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    // Daftar kolom yang boleh diisi secara mass assignment
    protected $fillable = ['title', 'description', 'image'];
}
