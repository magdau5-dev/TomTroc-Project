<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../managers/UserManager.php';
require_once __DIR__ . '/../core/View.php';

class UserController
{

    public function showRegister()
    {
        $error = $this->register();

        View::render('inscription', [
            'error' => $error
        ]);
    }

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

        $userManager = new UserManager();
        $existingUser = $userManager->findByEmail($email);

        if ($existingUser) {
            return 'Cette adresse email est déjà utilisée.';
        }

        $hashedPassword = password_hash(
            $password,
            PASSWORD_DEFAULT
        );

        $user = new User(
            $username,
            $email,
            $hashedPassword
        );

        $userManager->create($user);

        header('Location: /TomTroc-Project/?page=connexion');
        exit;
    }                                             


    public function showLogin()
    {
        $error = $this->login();

        View::render('connexion', [
            'error' => $error
        ]);
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

        $userManager = new UserManager();
        $user = $userManager->findByEmail($email);

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

    public function showProfile(): void
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /TomTroc-Project/?page=connexion');
            exit;
        }

        $userId = (int) $_SESSION['user_id'];

        $userManager = new UserManager();
        $bookManager = new BookManager();

        $user = $userManager->findById($userId);

        if (!$user) {
            header('Location: /TomTroc-Project/?page=connexion');
            exit;
        }

        $books = $bookManager->findByUserId($userId);

        View::render('profile', [
            'user' => $user,
            'books' => $books
        ]);
    }
}
