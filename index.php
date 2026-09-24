<?php

session_start();

require_once __DIR__ . '/src/controllers/HomeController.php';
require_once __DIR__ . '/src/controllers/BookController.php';
require_once __DIR__ . '/src/controllers/UserController.php';
require_once __DIR__ . '/src/controllers/ErrorController.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {

    case 'home':
        $controller = new HomeController();
        $controller->showHome();
        break;

    case 'books':
        $controller = new BookController();
        $controller->showBooks();
        break;

    case 'singleBook':
        $controller = new BookController();
        $controller->showBook();
        break;
        
    case 'addBook':
        $controller = new BookController();
        $controller->showAddBook();
        break;
    
    case 'editBook':
        $controller = new BookController();
        $controller->showEditBook();
        break;

    case 'deleteBook':
        $controller = new BookController();
        $controller->deleteBook();
        break;

    case 'connexion':
        $controller = new UserController();
        $controller->showLogin();
        break;

    case 'inscription':
        $controller = new UserController();
        $controller->showRegister();
        break;

    case 'profile':
        $controller = new UserController();
        $controller->showProfile();
        break;

    case 'publicProfile':
        $controller = new UserController();
        $controller->showPublicProfile();
        break;

    default:
        $controller = new ErrorController();
        $controller->notFound();
        break;
}