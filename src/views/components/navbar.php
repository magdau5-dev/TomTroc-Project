<?php $currentPage = $_GET['page'] ?? 'home'; ?>

<nav>

    <?php require_once __DIR__ . '/logo.php'; ?>

    <div>
        <?php if ($currentPage === 'home'): ?>
            <span class="nav-active" aria-current="page">Accueil</span>
        <?php else: ?>
            <a href="/TomTroc-Project/?page=home">
                Accueil
            </a>
        <?php endif; ?>

        <a
            href="/TomTroc-Project/?page=books"
            class="<?= $currentPage === 'books' ? 'nav-active' : '' ?>"
        >
            Nos livres à l'échange
        </a>
    </div>

    <div>
        <a
            href="/TomTroc-Project/?page=chat"
            class="<?= $currentPage === 'chat' ? 'nav-active' : '' ?>"
        >
            Messagerie
        </a>

        <a
            href="/TomTroc-Project/?page=profile"
            class="<?= $currentPage === 'profile' ? 'nav-active' : '' ?>"
        >
            <span>♙</span>
            <span>Mon compte</span>
        </a>

        <?php if (isset($_SESSION['user_id'])): ?>

            <a href="/TomTroc-Project/?page=logout">
                Déconnexion
            </a>

        <?php else: ?>

            <a
                href="/TomTroc-Project/?page=connexion"
                class="<?= $currentPage === 'connexion' ? 'nav-active' : '' ?>"
            >
                Connexion
            </a>

        <?php endif; ?>
    </div>

</nav>