<?php

require_once __DIR__ . '/../core/View.php';

class HomeController
{
    public function showHome(): void
    {
        View::render('home');
    }
}