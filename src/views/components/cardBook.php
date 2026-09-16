<article class="book-card">

    <a
        href="/TomTroc-Project/?page=singleBook&id=<?= (int) $book['id'] ?>"
        class="book-card-link"
    >

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

    </a>

</article>