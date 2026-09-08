<?php

session_start();

require_once __DIR__ . '/src/controllers/UserController.php';

$page = $_GET['page'] ?? 'home';

$error = null;

$userController = new UserController();

if ($page === 'inscription') {
    $error = $userController->register();
}

if ($page === 'connexion') {
    $error = $userController->login();
}

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Tom Troc</title>

    <link
        rel="stylesheet"
        href="/TomTroc-Project/style.css?v=6"
    >
</head>

<body>

    <?php require_once __DIR__ . '/src/views/layouts/main.php'; ?>

</body>

</html>