<?php

class Database
{
    private string $host = 'localhost';
    private string $dbName = 'tomtroc';
    private string $username = 'root';
    private string $password = '';

    public function getConnection(): PDO
    {
        try {
            $pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->dbName};charset=utf8mb4",
                $this->username,
                $this->password
            );

            $pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $pdo;

        } catch (PDOException $e) {
            die(
                'Erreur de connexion à la base de données : '
                . $e->getMessage()
            );
        }
    }
}