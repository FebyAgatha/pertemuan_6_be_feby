<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookTitle',
        'publisherId',
        'author',
        'price',
        'releaseDate',
    ];

    public function publisher(){
        return $this->belongsTo(Publisher::class, 'publisherId');
    }
}
