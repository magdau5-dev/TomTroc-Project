<?php

require_once __DIR__ . '/../core/View.php';

class BookController
{
    public function showBooks(): void
    {
        View::render('books');
    }

    public function showBook(): void
    {
        View::render('singleBook');
    }
}