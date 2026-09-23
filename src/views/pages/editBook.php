<section class="add-book-page">

    <div class="add-book-container">

        <a href="/TomTroc-Project/?page=profile" class="back-link">
            retour
        </a>

        <h1>
            Modifier les informations
        </h1>

        <form
            class="add-book-form"
            method="POST"
            action="/TomTroc-Project/?page=editBook&id=<?= $book['id'] ?>"
            enctype="multipart/form-data"
        >

            <div class="add-book-image">

                <p class="image-title">
                    Photo
                </p>

                <img
                    src="/TomTroc-Project/public/img/books/<?= htmlspecialchars($book['image']) ?>"
                    alt="Aperçu du livre"
                    id="image-preview"
                    class="image-preview"
                >

                <label for="book-image" class="change-image">
                    Modifier la photo
                </label>

                <input
                    type="file"
                    id="book-image"
                    name="image"
                    accept="image/*"
                    class="image-input"
                >

            </div>

            <div class="add-book-infos">

                <label for="book-title">
                    Titre
                </label>

                <input
                    type="text"
                    id="book-title"
                    name="title"
                    value="<?= htmlspecialchars($book['title']) ?>"
                    required
                >

                <label for="book-author">
                    Auteur
                </label>

                <input
                    type="text"
                    id="book-author"
                    name="author"
                    value="<?= htmlspecialchars($book['author']) ?>"
                    required
                >

                <label for="book-description">
                    Commentaire
                </label>

                <textarea
                    id="book-description"
                    name="description"
                    required
                ><?= htmlspecialchars($book['description']) ?></textarea>

                <label for="book-availability">
                    Disponibilité
                </label>

                <select
                    id="book-availability"
                    name="disponibilite"
                >

                    <option
                        value="disponible"
                        <?= $book['disponibilite'] === 'disponible' ? 'selected' : '' ?>
                    >
                        disponible
                    </option>

                    <option
                        value="non disponible"
                        <?= $book['disponibilite'] === 'non disponible' ? 'selected' : '' ?>
                    >
                        non disponible
                    </option>

                </select>

                <button type="submit" name="btnEditBook">
                    Valider
                </button>

            </div>

        </form>

    </div>

</section>