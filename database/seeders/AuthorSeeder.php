<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['name' => 'J.K. Rowling', 'email' => 'jkrowling@example.com'],
            ['name' => 'George R.R. Martin', 'email' => 'georgemartin@example.com'],
            ['name' => 'Haruki Murakami', 'email' => 'murakami@example.com'],
            ['name' => 'Andrea Hirata', 'email' => 'andrea@example.com'],
            ['name' => 'Tere Liye', 'email' => 'tereliye@example.com'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
