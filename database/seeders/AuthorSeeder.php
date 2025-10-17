<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    use Illuminate\Support\Facades\DB;

public function run(): void
{
    DB::table('authors')->insert([
        ['name' => 'Ahmad Rizky', 'email' => 'ahmad@example.com', 'biography' => 'Penulis novel religi.'],
        ['name' => 'Siti Nurhaliza', 'email' => 'siti@example.com', 'biography' => 'Penulis buku motivasi.'],
        ['name' => 'Joko Santoso', 'email' => 'joko@example.com', 'biography' => 'Penulis buku teknologi.'],
        ['name' => 'Rina Kartika', 'email' => 'rina@example.com', 'biography' => 'Penulis fiksi ilmiah.'],
        ['name' => 'Bayu Saputra', 'email' => 'bayu@example.com', 'biography' => 'Penulis buku sejarah.'],
    ]);
}

}
