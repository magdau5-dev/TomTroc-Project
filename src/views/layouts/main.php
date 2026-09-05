<?php require_once __DIR__ . '/header.php'; ?>

<main>

    <?php

    $page = $_GET['page'] ?? 'home';

    switch ($page) {

        case 'home':
            require_once __DIR__ . '/../pages/home.php';
            break;

        case 'books':
            require_once __DIR__ . '/../pages/books.php';
            break;

        case 'singleBook':
            require_once __DIR__ . '/../pages/singleBook.php';
            break;

        case 'connexion':
            require_once __DIR__ . '/../pages/connexion.php';
            break;

        case 'inscription':
            require_once __DIR__ . '/../pages/inscription.php';
            break;

        case 'profile':
            require_once __DIR__ . '/../pages/profile.php';
            break;

        default:
            require_once __DIR__ . '/../pages/notFound404.php';
            break;
    }

    ?>

</main>

<?php require_once __DIR__ . '/footer.php'; ?>