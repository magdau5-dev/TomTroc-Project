<section class="account-page">

    <div class="container">

        <h1>Mon compte</h1>

        <div class="account-top">

            <article class="account-profile">

                <div class="account-avatar">
                    <!-- Photo de profil ajoutée plus tard depuis la BDD -->
                </div>

                <a href="#">
                    modifier
                </a>

                <hr>

                <h2>
                    nathalire
                </h2>

                <p>
                    Membre depuis 1 an
                </p>

                <span>
                    BIBLIOTHÈQUE
                </span>

                <p>
                    4 livres
                </p>

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
                        value="nathalie@mail.com"
                    >

                    <label for="account-password">
                        Mot de passe
                    </label>

                    <input
                        type="password"
                        id="account-password"
                        value="password"
                    >

                    <label for="account-username">
                        Pseudo
                    </label>

                    <input
                        type="text"
                        id="account-username"
                        value="nathalire"
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

                    <tr>
                        <td>
                            <div class="account-book-image"></div>
                        </td>

                        <td>The Kinfolk Table</td>

                        <td>Nathan Williams</td>

                        <td>
                            J'ai récemment plongé dans les pages...
                        </td>

                        <td>
                            <span class="available">
                                disponible
                            </span>
                        </td>

                        <td>
                            <a href="#">Éditer</a>
                            <a href="#">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="account-book-image"></div>
                        </td>

                        <td>The Kinfolk Table</td>

                        <td>Nathan Williams</td>

                        <td>
                            J'ai récemment plongé dans les pages...
                        </td>

                        <td>
                            <span class="unavailable">
                                non dispo.
                            </span>
                        </td>

                        <td>
                            <a href="#">Éditer</a>
                            <a href="#">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="account-book-image"></div>
                        </td>

                        <td>The Kinfolk Table</td>

                        <td>Nathan Williams</td>

                        <td>
                            J'ai récemment plongé dans les pages...
                        </td>

                        <td>
                            <span class="available">
                                disponible
                            </span>
                        </td>

                        <td>
                            <a href="#">Éditer</a>
                            <a href="#">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="account-book-image"></div>
                        </td>

                        <td>The Kinfolk Table</td>

                        <td>Nathan Williams</td>

                        <td>
                            J'ai récemment plongé dans les pages...
                        </td>

                        <td>
                            <span class="unavailable">
                                non dispo.
                            </span>
                        </td>

                        <td>
                            <a href="#">Éditer</a>
                            <a href="#">Supprimer</a>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>