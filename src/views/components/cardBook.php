<article class="book-card">

    <div class="book-card-image">
        <img
            src="/TomTroc-Project/public/img/books/<?= htmlspecialchars($book['image']) ?>"
            alt="<?= htmlspecialchars($book['title']) ?>"
        >
    </div>

    <div class="book-card-content">

        <h3>
            <?= htmlspecialchars($book['title']) ?>
        </h3>

        <p class="book-card-author">
            <?= htmlspecialchars($book['author']) ?>
        </p>

        <p class="book-card-owner">
            Vendu par : <?= htmlspecialchars($book['username']) ?>
        </p>

    </div>

</article>