<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'introduction', 'content', 'attributes', 'poster', 'date', 'poster_alt', 'uuid', 'published'];

    protected $casts = [
        'date' => 'date',
        'published' => 'boolean',
    ];

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }
}
