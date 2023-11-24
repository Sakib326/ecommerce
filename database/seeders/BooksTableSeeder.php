<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear existing records to start with a clean slate
        Book::truncate();

        // Insert 10 sample books
        for ($i = 1; $i <= 10; $i++) {
            Book::create([
                'title' => "Book $i",
                'description' => "Book $i",
                'price' => rand(10, 30),
                'image_url' => "image/book-$i.png",
            ]);
        }
    }
}
