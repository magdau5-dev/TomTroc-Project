<section class="latest-books">

    <div class="container">

        <h2>
            Les derniers livres ajoutés
        </h2>

        <div class="latest-books-list">

            <?php foreach ($books as $book): ?>

                <?php require __DIR__ . '/../../../components/cardBook.php'; ?>

            <?php endforeach; ?>

        </div>

        <a href="/TomTroc-Project/?page=books">
            Voir tous les livres
        </a>

    </div>

</section>