<?php

require_once __DIR__ . '/../models/Database.php';

class BookManager
{
    private PDO $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    public function findAll(): array
    {
        $sql = "
            SELECT
                books.*,
                users.username
            FROM books
            JOIN users ON books.user_id = users.id
            ORDER BY books.created_at DESC
        ";

        $query = $this->pdo->query($sql);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findLatest(int $limit = 4): array
{
    $sql = "
        SELECT
            books.*,
            users.username
        FROM books
        JOIN users ON books.user_id = users.id
        ORDER BY books.created_at DESC
        LIMIT :limit
    ";

    $query = $this->pdo->prepare($sql);

    $query->bindValue(':limit', $limit, PDO::PARAM_INT);

    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}


    public function findById(int $id): ?array
    {
        $sql = "
            SELECT
                books.*,
                users.username,
                users.avatar
            FROM books
            JOIN users ON books.user_id = users.id
            WHERE books.id = :id
        ";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'id' => $id
        ]);

        $book = $query->fetch(PDO::FETCH_ASSOC);

        return $book ?: null;
    }

    public function findByUserId(int $userId): array
    {
        $sql = "
            SELECT *
            FROM books
            WHERE user_id = :user_id
            ORDER BY created_at DESC
        ";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'user_id' => $userId
        ]);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function searchByTitle(string $search): array
    { 
        // LOWER = convertit en minuscule pour effectuer une recherche
        // exemples dans la barre de recherche ce qui fonctionnera : 
        // The Kinfolk Table
        // the kinfolk table
        // THE KINFOLK TABLE
        // tHe KiNfOlK tAbLe
        
        $sql = "
            SELECT books.*, users.username
            FROM books
            JOIN users ON books.user_id = users.id
            WHERE LOWER(books.title) = LOWER(:search)
        ";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'search' => $search
        ]);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
