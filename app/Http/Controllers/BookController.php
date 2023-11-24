<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data['books'] = Book::take(8)->get();
        return view('welcome',  $data);
    }



}


