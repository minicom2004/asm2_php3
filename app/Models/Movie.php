<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'poster',
        'intro',
        'release_date',
        'genre_id',
    ];
    public function Genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
