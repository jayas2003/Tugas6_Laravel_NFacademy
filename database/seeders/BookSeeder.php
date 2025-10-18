<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Harry Potter and the Sorcerer\'s Stone', 'genre' => 'Fantasy', 'author_id' => 1],
            ['title' => 'A Game of Thrones', 'genre' => 'Fantasy', 'author_id' => 2],
            ['title' => 'Kafka on the Shore', 'genre' => 'Fiction', 'author_id' => 3],
            ['title' => 'Laskar Pelangi', 'genre' => 'Drama', 'author_id' => 4],
            ['title' => 'Hafalan Shalat Delisa', 'genre' => 'Inspiratif', 'author_id' => 5],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
