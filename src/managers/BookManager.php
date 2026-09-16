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
            SELECT books.*, users.username
            FROM books
            JOIN users ON books.user_id = users.id
            ORDER BY books.created_at DESC
        ";

        $query = $this->pdo->query($sql);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}