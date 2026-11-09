<?php

declare(strict_types=1);

$produits = ['Clavier' => 29.99, 'Souris' => 14.50, 'Écran' => 179.00, 'Casque' => 39.90];
// TODO : lire $_REQUEST['recherche'], appliquer trim(), filtrer avec stripos().
// TODO : lire la quantité avec filter_input(INPUT_GET, 'quantite', FILTER_VALIDATE_INT).
// FILTER_VALIDATE_INT renvoie un entier, false (invalide) ou null (absent).

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MiniShop 5C — À compléter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main class="container py-4">
        <h1>MiniShop 5C — À compléter</h1>
        <ol>
            <li>Afficher les produits et leurs prix avec <code>foreach</code>.</li>
            <li>Ajouter un formulaire GET avec <code>recherche</code> et <code>quantite</code>.</li>
            <li>Afficher seulement les produits correspondants avec <code>stripos()</code>.</li>
            <li>Valider la quantité (1 à 10) et calculer le total.</li>
        </ol>
    </main>
</body>

</html>