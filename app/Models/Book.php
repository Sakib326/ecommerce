<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'books';

    // Fillable fields for mass assignment
    protected $fillable = [
        'title',
        'author',
        'price',
        'image_url', 
    ];

    // Eloquent relationships, if any
}
