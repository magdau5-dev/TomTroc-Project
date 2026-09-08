<section class="inscription-page">

    <div class="inscription-form">

        <h1>Inscription</h1>

        <?php if (!empty($error)) : ?>

            <p class="form-error">
                <?= htmlspecialchars($error) ?>
            </p>

        <?php endif; ?>

        <form method="POST">

            <label for="username">
                Pseudo
            </label>

            <input
                type="text"
                id="username"
                name="username"
                required
            >

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
                S'inscrire
            </button>

        </form>

        <p>
            Déjà inscrit ?

            <a href="/TomTroc-Project/?page=connexion">
                Connectez-vous
            </a>
        </p>

    </div>


    <div class="inscription-image">
        <!-- Img -->
    </div>

</section>