<?php

class View
{
    public static function render(string $page, array $data = []): void
    {
        // Transforme les éléments du tableau en variables
        extract($data);

        // On démarre la récupération du HTML
        ob_start();

        // On charge la page
        require __DIR__ . '/../views/pages/' . $page . '.php';

        // On récupère le HTML de la page
        $content = ob_get_clean();

        // On envoie le contenu au layout principal
        require __DIR__ . '/../views/layouts/main.php';
    }
}