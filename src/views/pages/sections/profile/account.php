<section class="account-page">

    <div class="container">

        <h1>
            Mon compte
        </h1>


        <div class="account-top">

            <article class="account-profile">

                <div class="account-avatar">

                    <?php if (!empty($user['avatar'])): ?>

                        <img
                            src="/TomTroc-Project/public/img/avatars/<?= htmlspecialchars($user['avatar']) ?>"
                            alt="Avatar de <?= htmlspecialchars($user['username']) ?>"
                        >

                    <?php endif; ?>

                </div>

                <a href="#">
                    modifier
                </a>

                <hr>

                <h2>
                    <?= htmlspecialchars($user['username']) ?>
                </h2>

                <p>
                    Membre depuis le
                    <?= date(
                        'd/m/Y',
                        strtotime($user['created_at'])
                    ) ?>
                </p>

                <span>
                    BIBLIOTHÈQUE
                </span>

                <p>
                    <?= count($books) ?>
                    <?= count($books) > 1 ? 'livres' : 'livre' ?>
                </p>

                <a
                    href="/TomTroc-Project/?page=addBook"
                    class="add-book-button"
                >
                    Ajouter un livre
                </a>

            </article>


            <article class="account-infos">

                <h2>
                    Vos informations personnelles
                </h2>

                <form>

                    <label for="account-email">
                        Adresse email
                    </label>

                    <input
                        type="email"
                        id="account-email"
                        value="<?= htmlspecialchars($user['email']) ?>"
                    >


                    <label for="account-password">
                        Mot de passe
                    </label>

                    <input
                        type="password"
                        id="account-password"
                        placeholder="********"
                    >


                    <label for="account-username">
                        Pseudo
                    </label>

                    <input
                        type="text"
                        id="account-username"
                        value="<?= htmlspecialchars($user['username']) ?>"
                    >


                    <button type="submit">
                        Enregistrer
                    </button>

                </form>

            </article>

        </div>


        <div class="account-books">

            <table>

                <thead>

                    <tr>
                        <th>PHOTO</th>
                        <th>TITRE</th>
                        <th>AUTEUR</th>
                        <th>DESCRIPTION</th>
                        <th>DISPONIBILITÉ</th>
                        <th>ACTION</th>
                    </tr>

                </thead>


                <tbody>

                    <?php if (empty($books)): ?>

                        <tr>

                            <td colspan="6">
                                Aucun livre dans votre bibliothèque.
                            </td>

                        </tr>

                    <?php else: ?>


                        <?php foreach ($books as $book): ?>

                            <tr>

                                <td>

                                    <div class="account-book-image">

                                        <?php if (!empty($book['image'])): ?>

                                            <img
                                                src="/TomTroc-Project/public/img/books/<?= htmlspecialchars($book['image']) ?>"
                                                alt="<?= htmlspecialchars($book['title']) ?>"
                                            >

                                        <?php endif; ?>

                                    </div>

                                </td>


                                <td>
                                    <?= htmlspecialchars($book['title']) ?>
                                </td>


                                <td>
                                    <?= htmlspecialchars($book['author']) ?>
                                </td>


                                <td>

                                    <p class="account-book-description">
                                        <?= htmlspecialchars($book['description']) ?>
                                    </p>

                                </td>


                                <td>

                                    <?php if ($book['disponibilite'] === 'disponible'): ?>

                                        <span class="available">
                                            disponible
                                        </span>

                                    <?php else: ?>

                                        <span class="unavailable">
                                            non dispo.
                                        </span>

                                    <?php endif; ?>

                                </td>


                                <td>

                                    <a href="/TomTroc-Project/?page=editBook&id=<?= $book['id'] ?>">
                                        Éditer
                                    </a>

                                    <a href="#">
                                        Supprimer
                                    </a>

                                </td>

                            </tr>

                        <?php endforeach; ?>


                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</section>