<?php

require_once __DIR__ . '/../core/View.php';
require_once __DIR__ . '/../managers/BookManager.php';

class BookController
{
    public function showBooks(): void
    {
        $bookManager = new BookManager();

        $books = $bookManager->findAll();

        View::render('books', [
            'books' => $books
        ]);
    }

    public function showBook(): void
    {
        View::render('singleBook');
    }
}