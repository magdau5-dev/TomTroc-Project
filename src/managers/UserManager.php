<?php

require_once __DIR__ . '/../models/Database.php';
require_once __DIR__ . '/../models/User.php';

class UserManager
{
    private PDO $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    public function findByEmail(string $email): ?array
    {
        $sql = "SELECT * FROM users WHERE email = :email";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'email' => $email
        ]);

        $user = $query->fetch(PDO::FETCH_ASSOC);

        return $user ?: null;
    }

    public function create(User $user): void
    {
        $sql = "
            INSERT INTO users (username, email, password, avatar)
            VALUES (:username, :email, :password, :avatar)
        ";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'avatar' => $user->getAvatar()
        ]);
    }
}