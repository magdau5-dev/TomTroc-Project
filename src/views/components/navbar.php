<nav>

    <?php require_once __DIR__ . '/logo.php'; ?>

    <div>
        <a href="/TomTroc-Project/?page=home">
            Accueil
        </a>

        <a href="/TomTroc-Project/?page=books">
            Nos livres à l'échange
        </a>
    </div>

    <div>
        <a href="#">
            <span>◯</span>
            <span>Messagerie</span>
            <span>1</span>
        </a>

        <a href="/TomTroc-Project/?page=profile">
            <span>♙</span>
            <span>Mon compte</span>
        </a>

        <?php if (isset($_SESSION['user_id'])): ?>

            <a href="/TomTroc-Project/?page=logout">
                Déconnexion
            </a>

        <?php else: ?>

            <a href="/TomTroc-Project/?page=connexion">
                Connexion
            </a>

        <?php endif; ?>
    </div>

</nav>