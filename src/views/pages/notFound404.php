<?php

$message = $message ?? "Cette page n'existe pas.";
?>

<section class="error-page">

    <div class="container">

        <h1>
            404
        </h1>

        <p>
            <?= htmlspecialchars($message) ?>
        </p>

        <a href="/TomTroc-Project/?page=home" class="error-page-link">
            Retour à l'accueil
        </a>

    </div>

</section>
