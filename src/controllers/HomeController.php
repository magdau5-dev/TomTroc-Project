<?php

require_once __DIR__ . '/../core/View.php';
require_once __DIR__ . '/../managers/BookManager.php';

class HomeController
{
    public function showHome(): void
    {
        $bookManager = new BookManager();

        $books = $bookManager->findLatest(4);

        View::render('home', [
            'books' => $books
        ]);
    }
}