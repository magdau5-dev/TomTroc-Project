<section class="books-page">

    <div class="container">

        <div class="books-header">

            <h1>
                Nos livres à l’échange
            </h1>

            <form method="GET" action="/TomTroc-Project/">

                <!-- Input invisible qui sert à indiquer à rester sur la page des livres pour la requete de la barre de recherche. ?page=books -->
                <input
                    type="hidden"
                    name="page"
                    value="books"
                >

                
                <input
                    type="search"
                    name="search"
                    placeholder="Rechercher un livre"
                    value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
                >

            </form>

        </div>

        <div class="books-grid">

            <?php foreach ($books as $book): ?>

                <?php require __DIR__ . '/../../../components/cardBook.php'; ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>