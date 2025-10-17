<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run(): void
{
    DB::table('books')->insert([
        ['title' => 'Belajar Laravel', 'genre' => 'Teknologi', 'publication_year' => 2023, 'author_id' => 3],
        ['title' => 'Kekuatan Doa', 'genre' => 'Religi', 'publication_year' => 2020, 'author_id' => 1],
        ['title' => 'Motivasi Hidup', 'genre' => 'Motivasi', 'publication_year' => 2021, 'author_id' => 2],
        ['title' => 'Petualangan di Mars', 'genre' => 'Fiksi Ilmiah', 'publication_year' => 2024, 'author_id' => 4],
        ['title' => 'Sejarah Nusantara', 'genre' => 'Sejarah', 'publication_year' => 2022, 'author_id' => 5],
    ]);
}

}
