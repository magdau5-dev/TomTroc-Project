<section class="add-book-page">

    <div class="add-book-container">

        <a href="/TomTroc-Project/?page=profile" class="back-link">
            retour
        </a>

        <h1>
            Ajouter un livre
        </h1>

        <form
            class="add-book-form"
            method="POST"
            action="/TomTroc-Project/?page=addBook"
        >

            <div class="add-book-image">

                <label for="book-image">
                    Photo
                </label>

                <input
                    type="file"
                    id="book-image"
                    name="image"
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
                    required
                >

                <label for="book-author">
                    Auteur
                </label>

                <input
                    type="text"
                    id="book-author"
                    name="author"
                    required
                >

                <label for="book-description">
                    Commentaire
                </label>

                <textarea
                    id="book-description"
                    name="description"
                    required
                ></textarea>

                <label for="book-availability">
                    Disponibilité
                </label>

                <select
                    id="book-availability"
                    name="disponibilite"
                >
                    <option value="disponible">
                        disponible
                    </option>

                    <option value="non disponible">
                        non disponible
                    </option>
                </select>

                <button type="submit" name="btnAddBook">
                    Ajouter
                </button>

            </div>

        </form>

    </div>

</section>