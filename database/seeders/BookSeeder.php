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
        $books = [
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'description' => 'Guide to writing clean and maintainable code',
                'isbn' => '9780132350884',
                'price' => 450.00
            ],
            [
                'title' => 'The Pragmatic Programmer',
                'author' => 'Andrew Hunt',
                'description' => 'Best practices for programmers',
                'isbn' => '9780201616224',
                'price' => 500.00
            ],
            [
                'title' => 'Design Patterns',
                'author' => 'Erich Gamma',
                'description' => 'Elements of reusable object-oriented software',
                'isbn' => '9780201633610',
                'price' => 600.00
            ],
            [
                'title' => 'Refactoring',
                'author' => 'Martin Fowler',
                'description' => 'Improving the design of existing code',
                'isbn' => '9780201485677',
                'price' => 550.00
            ],
            [
                'title' => 'You Don’t Know JS',
                'author' => 'Kyle Simpson',
                'description' => 'Deep dive into JavaScript',
                'isbn' => '9781491904244',
                'price' => 400.00
            ],
            [
                'title' => 'Eloquent JavaScript',
                'author' => 'Marijn Haverbeke',
                'description' => 'Modern introduction to JavaScript',
                'isbn' => '9781593279509',
                'price' => 350.00
            ],
            [
                'title' => 'Laravel Up & Running',
                'author' => 'Matt Stauffer',
                'description' => 'Laravel framework guide',
                'isbn' => '9781492041214',
                'price' => 480.00
            ],
            [
                'title' => 'Deep Learning',
                'author' => 'Ian Goodfellow',
                'description' => 'Comprehensive deep learning book',
                'isbn' => '9780262035613',
                'price' => 700.00
            ],
            [
                'title' => 'Introduction to Algorithms',
                'author' => 'Thomas H. Cormen',
                'description' => 'Algorithm fundamentals',
                'isbn' => '9780262033848',
                'price' => 800.00
            ],
            [
                'title' => 'Cracking the Coding Interview',
                'author' => 'Gayle Laakmann McDowell',
                'description' => 'Interview preparation book',
                'isbn' => '9780984782857',
                'price' => 450.00
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
