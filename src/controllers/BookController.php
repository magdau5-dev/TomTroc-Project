<?php

require_once __DIR__ . '/../core/View.php';
require_once __DIR__ . '/../models/Book.php';

class BookController
{
    public function showBooks(): void
    {
        $bookModel = new Book();

        $books = $bookModel->findAll();

        View::render('books', [
            'books' => $books
        ]);
    }

    public function showBook(): void
    {
        View::render('singleBook');
    }
}