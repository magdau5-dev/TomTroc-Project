<section class="connexion-page">

    <div class="connexion-form">

        <h1>Connexion</h1>

        <?php if (!empty($error)) : ?>

            <p class="form-error">
                <?= htmlspecialchars($error) ?>
            </p>

        <?php endif; ?>

        <form method="POST">

            <label for="email">
                Adresse email
            </label>

            <input
                type="email"
                id="email"
                name="email"
                required
            >

            <label for="password">
                Mot de passe
            </label>

            <input
                type="password"
                id="password"
                name="password"
                required
            >

            <button type="submit">
                Se connecter
            </button>

        </form>

        <p>
            Pas encore inscrit ?

            <a href="/TomTroc-Project/?page=inscription">
                Inscrivez-vous
            </a>
        </p>

    </div>


    <div class="connexion-image">
        <img
            src="/TomTroc-Project/public/img/books/biblioBookSmall.png"
            alt="Étagères remplies de livres"
        >
    </div>

</section>