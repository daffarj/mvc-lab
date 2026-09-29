<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Clean Code',
            'author' => 'Robert C. Martin',
            'year' => 2008,
            'isbn' => '9780132350884',
        ]);

        Book::create([
            'title' => 'Refactoring',
            'author' => 'Martin Fowler',
            'year' => 2018,
            'isbn' => '9780201485677',
        ]);
    }
}
