<?php

require_once __DIR__ . '/../models/User.php';

class UserController
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        $username = trim($_POST['username'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($username) || empty($email) || empty($password)) {
            echo 'Tous les champs sont obligatoires.';
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Adresse email invalide.';
            return;
        }

        $user = new User();

        $existingUser = $user->findByEmail($email);

        if ($existingUser) {
            echo 'Cette adresse email est déjà utilisée.';
            return;
        }

        $hashedPassword = password_hash(
            $password,
            PASSWORD_DEFAULT
        );

        $user->create(
            $username,
            $email,
            $hashedPassword
        );

        header('Location: /TomTroc-Project/?page=connexion');
        exit;
    }
}