<?php

require_once __DIR__ . '/../models/User.php';

class UserController
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return null;
        }

        $username = trim($_POST['username'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($username) || empty($email) || empty($password)) {
            return 'Tous les champs sont obligatoires.';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Adresse email invalide.';
        }

        $user = new User();

        $existingUser = $user->findByEmail($email);

        if ($existingUser) {
            return 'Cette adresse email est déjà utilisée.';
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


    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return null;
        }

        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($email) || empty($password)) {
            return 'Tous les champs sont obligatoires.';
        }

        $userModel = new User();

        $user = $userModel->findByEmail($email);

        if (!$user) {
            return 'Email ou mot de passe incorrect.';
        }

        if (!password_verify($password, $user['password'])) {
            return 'Email ou mot de passe incorrect.';
        }

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];

        header('Location: /TomTroc-Project/?page=profile');
        exit;
    }
}