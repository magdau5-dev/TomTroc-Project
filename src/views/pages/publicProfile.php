<?php

$createdAt = new DateTime($user['created_at']);
$today = new DateTime();

$memberSince = $createdAt->diff($today)->y;

?>

<section class="public-profile-page">

    <div class="public-profile-container">

        <div class="public-profile-user">

            <img
                src="/TomTroc-Project/public/img/avatars/<?= htmlspecialchars($user['avatar']) ?>"
                alt="Photo de profil de <?= htmlspecialchars($user['username']) ?>"
                class="public-profile-avatar"
            >

            <div class="public-profile-line"></div>

            <h1 class="public-profile-username">
                <?= htmlspecialchars($user['username']) ?>
            </h1>

            <p class="public-profile-member">
                Membre depuis <?= $memberSince ?> ans
            </p>

            <p class="public-profile-library-title">
                BIBLIOTHÈQUE
            </p>

            <p class="public-profile-library-count">
                <?= count($books) ?> livre<?= count($books) > 1 ? 's' : '' ?>
            </p>

            <a
                href="/TomTroc-Project/?page=chat&id=<?= $user['id'] ?>"
                class="public-profile-message"
            >
                Écrire un message
            </a>

        </div>

        <table class="public-profile-books">

            <thead>

                <tr>
                    <th>PHOTO</th>
                    <th>TITRE</th>
                    <th>AUTEUR</th>
                    <th>DESCRIPTION</th>
                </tr>

            </thead>

            <tbody>

                <?php foreach ($books as $book): ?>

                    <tr>

                        <td>
                            <img
                                src="/TomTroc-Project/public/img/books/<?= htmlspecialchars($book['image']) ?>"
                                alt="<?= htmlspecialchars($book['title']) ?>"
                                class="public-profile-book-image"
                            >
                        </td>

                        <td>
                            <?= htmlspecialchars($book['title']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($book['author']) ?>
                        </td>

                        <td class="public-profile-description">
                            <?= htmlspecialchars(mb_strimwidth($book['description'], 0, 90, '...')) ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</section>