<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];     // Mendefinisikan apa yg boleh diisi
    protected $guarded = ['id'];                             // Mendefinisikan apa yang tidak boleh diisi
}
