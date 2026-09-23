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
            enctype="multipart/form-data"  
        >
            <!-- enctype sert à permettre l'envoi de fichiers via le formulaire -->

            <div class="add-book-image">

                <p class="image-title">
                    Photo
                </p>

                <img
                    src="/TomTroc-Project/public/img/books/noImage.png"
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

<script>
    const imageInput = document.getElementById('book-image');
    const imagePreview = document.getElementById('image-preview');

    imageInput.addEventListener('change', function () {

        const image = imageInput.files[0];

        if (image) {
            imagePreview.src = URL.createObjectURL(image);
        }

    });
</script>