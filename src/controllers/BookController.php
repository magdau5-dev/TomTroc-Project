<?php

require_once __DIR__ . '/../core/View.php';
require_once __DIR__ . '/../managers/BookManager.php';
require_once __DIR__ . '/../models/Book.php';

class BookController
{
    public function showBooks(): void
    {
        $bookManager = new BookManager();

        // Récupération de la valeur de recherche depuis la barre de recherche | trim = supprime les espaces avant et après la chaîne
        $search = trim($_GET['search'] ?? '');

        if ($search) {
            $books = $bookManager->searchByTitle($search);
        } else {
            $books = $bookManager->findAll();
        }

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

    public function showAddBook(): void
    {
        if (isset($_POST['btnAddBook'])) {

            $title = $_POST['title'];
            $author = $_POST['author'];
            $description = $_POST['description'];
            $disponibilite = $_POST['disponibilite'];

            $image = 'noImage.png';
            // $_FILES = tous les fichiers envoyés par le formulaire 
            // ['image'] correspond au champ "name" de l'input type="file" 
            // ['name'] = nom du fichier inséré par l'utilisateur
            
            if (!empty($_FILES['image']['name'])) {


                $image = $_FILES['image']['name'];

                // ['tmp_name'] = emplacement temporaire du fichier sur le serveur
                move_uploaded_file(
                    $_FILES['image']['tmp_name'],
                    __DIR__ . '/../../public/img/books/' . $image // chemin de destination final du fichier sur le serveur
                );
            }

            $userId = $_SESSION['user_id'];

            $book = new Book(
                $userId,
                $title,
                $author,
                $description,
                $image,
                $disponibilite
            );

            $bookManager = new BookManager();
            $bookManager->createBook($book);

            header('Location: /TomTroc-Project/?page=profile');
            exit;
        }

        View::render('addBook');
    }

    public function showEditBook(): void
    {
        $id = (int) ($_GET['id'] ?? 0);

        $bookManager = new BookManager();

        $book = $bookManager->findById($id);

        if (!$book) {
            View::render('notFound404');
            return;
        }

        // Le bon livre au bon utilisateur connecté
        if ($book['user_id'] != $_SESSION['user_id']) {
            header('Location: /TomTroc-Project/?page=profile');
            exit;
        }

        if (isset($_POST['btnEditBook'])) {

            $title = $_POST['title'];
            $author = $_POST['author'];
            $description = $_POST['description'];
            $disponibilite = $_POST['disponibilite'];

            $image = $book['image'];
            if (!empty($_FILES['image']['name'])) {
                $image = $_FILES['image']['name'];
                move_uploaded_file(
                    $_FILES['image']['tmp_name'],
                    __DIR__ . '/../../public/img/books/' . $image
                );
            }

            $userId = $_SESSION['user_id'];

            $updatedBook = new Book(
                $userId,
                $title,
                $author,
                $description,
                $image,
                $disponibilite
            );

            $bookManager->updateBook($id, $updatedBook);

            header('Location: /TomTroc-Project/?page=profile');
            exit;
        }

        View::render('editBook', [
            'book' => $book
        ]);
    }

    public function deleteBook(): void
    {
        $id = (int) ($_GET['id'] ?? 0);

        $bookManager = new BookManager();

        $book = $bookManager->findById($id);

        if (!$book) {
            View::render('notFound404');
            return;
        }

        if ($book['user_id'] != $_SESSION['user_id']) {
            header('Location: /TomTroc-Project/?page=profile');
            exit;
        }

        $bookManager->deleteBook($id);

        header('Location: /TomTroc-Project/?page=profile');
        exit;
    }
}