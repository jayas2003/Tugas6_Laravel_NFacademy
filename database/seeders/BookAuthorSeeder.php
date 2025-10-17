<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class BookAuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['name' => 'Tere Liye'],
            ['name' => 'Andrea Hirata'],
            ['name' => 'Raditya Dika'],
            ['name' => 'Dee Lestari'],
            ['name' => 'Habiburrahman El Shirazy'],
        ];

        foreach ($authors as $data) {
            Author::create($data);
        }

        $books = [
            ['title' => 'Hujan', 'genre' => 'Fiksi', 'published_year' => 2016, 'author_id' => 1],
            ['title' => 'Laskar Pelangi', 'genre' => 'Drama', 'published_year' => 2005, 'author_id' => 2],
            ['title' => 'Manusia Setengah Salmon', 'genre' => 'Komedi', 'published_year' => 2011, 'author_id' => 3],
            ['title' => 'Perahu Kertas', 'genre' => 'Romance', 'published_year' => 2009, 'author_id' => 4],
            ['title' => 'Ayat-Ayat Cinta', 'genre' => 'Religi', 'published_year' => 2004, 'author_id' => 5],
        ];

        foreach ($books as $data) {
            Book::create($data);
        }
    }
}
