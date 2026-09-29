<?php

require_once __DIR__ . '/../core/View.php';

class ErrorController
{
    public function notFound(): void
    {
        View::render('notFound404', [
            'message' => "Cette page n'existe pas."
        ]);
    }
}