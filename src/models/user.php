<?php

require_once __DIR__ . '/Database.php';

class User
{
    private $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    public function create($username, $email, $password)
    {
        $sql = "
            INSERT INTO users (username, email, password)
            VALUES (:username, :email, :password)
        ";

        $query = $this->pdo->prepare($sql);

        return $query->execute([
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);
    }

    public function findByEmail($email)
    {
        $sql = "
            SELECT *
            FROM users
            WHERE email = :email
        ";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'email' => $email
        ]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }
}