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
        $id = (int) ($_GET['id'] ?? 0);

        $bookManager = new BookManager();

        $book = $bookManager->findById($id);

        if (!$book) {
            View::render('notFound404');
            return;
        }

        View::render('singleBook', [
            'book' => $book
        ]);
    }
}