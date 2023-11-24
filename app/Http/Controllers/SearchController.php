<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // You can access query parameters using $request
        $query = $request->input('query');

        // Perform search and return the results
        $results = Book::where('title', 'like', '%' . $query . '%')
            ->orWhere('author', 'like', '%' . $query . '%')
            ->get();

        return response()->json($results);
    }
}
