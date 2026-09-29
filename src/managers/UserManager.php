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

    public function findById(int $id): ?array
    {
        $sql = "
            SELECT id, username, email, avatar, created_at
            FROM users
            WHERE id = :id
        ";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'id' => $id
        ]);

        $user = $query->fetch(PDO::FETCH_ASSOC);

        return $user ?: null;
    }

    public function updateProfile(
        int $id,
        string $username,
        string $email,
        ?string $password = null
    ): void {
        if ($password === null) {
            $sql = "
                UPDATE users
                SET username = :username, email = :email
                WHERE id = :id
            ";

            $query = $this->pdo->prepare($sql);

            $query->execute([
                'id' => $id,
                'username' => $username,
                'email' => $email
            ]);

            return;
        }

        $sql = "
            UPDATE users
            SET username = :username,
                email = :email,
                password = :password
            WHERE id = :id
        ";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);
    }

    public function updateAvatar(int $id, string $avatar): void
    {
        $sql = "
            UPDATE users
            SET avatar = :avatar
            WHERE id = :id
        ";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'id' => $id,
            'avatar' => $avatar
        ]);
    }
}