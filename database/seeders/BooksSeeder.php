<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    public function run()
    {
        Book::truncate();
        DB::table('books')->insert([
            [
                'judul' => 'Buku 1',
                'penulis' => 'Penulis 1',
                'tahun_terbit' => 2020,
                'deskripsi' => 'Deskripsi buku 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Buku 2',
                'penulis' => 'Penulis 2',
                'tahun_terbit' => 2021,
                'deskripsi' => 'Deskripsi buku 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Buku 3',
                'penulis' => 'Penulis 3',
                'tahun_terbit' => 2019,
                'deskripsi' => 'Deskripsi buku 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Buku 4',
                'penulis' => 'Penulis 4',
                'tahun_terbit' => 2022,
                'deskripsi' => 'Deskripsi buku 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Buku 5',
                'penulis' => 'Penulis 5',
                'tahun_terbit' => 2023,
                'deskripsi' => 'Deskripsi buku 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
