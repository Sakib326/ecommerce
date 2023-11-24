<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Book;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
public function addToCart(Book $book)
{
    // Ensure the user is authenticated
    if (Auth::check()) {
        $user = Auth::user();

        // Check if the book is already in the user's cart
        $cartItem = $user->cart()->where('book_id', $book->id)->first();

        if ($cartItem) {
            // Increment the quantity if the book is already in the cart
            $cartItem->increment('quantity');
        } else {
            // Add the book to the cart with a quantity of 1
            $cartItem = $user->cart()->create([
                'book_id' => $book->id,
                'quantity' => 1,
            ]);
        }


        return response()->json(['message' => 'Book added to cart successfully', 'cart_item' => $cartItem]);
    }

    return response()->json(['message' => 'User not authenticated'], 401);
}


    public function viewCart()
    {
        $cartItems = Cart::with('book')->get();

        return view('cart', compact('cartItems'));
    }
}

