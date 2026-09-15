<section class="books-page">

    <div class="container">

        <div class="books-header">

            <h1>
                Nos livres à l’échange
            </h1>

            <form>
                <input
                    type="search"
                    placeholder="Rechercher un livre"
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