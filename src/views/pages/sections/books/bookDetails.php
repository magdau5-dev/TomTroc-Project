<section class="book-details">

    <div class="container">

        <p class="book-details-breadcrumb">
            Nos livres &gt;
            <?= htmlspecialchars($book['title']) ?>
        </p>

    </div>

    <div class="book-details-content">

        <div class="book-details-image">

            <img
                src="/TomTroc-Project/public/img/books/<?= htmlspecialchars($book['image']) ?>"
                alt="<?= htmlspecialchars($book['title']) ?>"
            >

        </div>

        <div class="book-details-info">

            <h1>
                <?= htmlspecialchars($book['title']) ?>
            </h1>

            <p class="book-details-author">
                par <?= htmlspecialchars($book['author']) ?>
            </p>

            <hr>

            <h2>
                DESCRIPTION
            </h2>

            <p>
                <?= nl2br(htmlspecialchars($book['description'])) ?>
            </p>

            <h2>
                PROPRIÉTAIRE
            </h2>

            <div class="book-details-owner">

                <img
                    src="/TomTroc-Project/public/img/avatars/<?= htmlspecialchars($book['avatar']) ?>"
                    alt="Photo de profil de <?= htmlspecialchars($book['username']) ?>"
                >

                <span>
                    <?= htmlspecialchars($book['username']) ?>
                </span>

            </div>

            <a href="#" class="book-details-message">
                Envoyer un message
            </a>

        </div>

    </div>

</section>