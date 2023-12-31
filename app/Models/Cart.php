<?php

// app/Models/Cart.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'quantity',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
