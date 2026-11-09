<?php
// MINISHOP 5A – Premier catalogue
$produits = [
    ['nom' => 'Pain', 'prix' => 3.50, 'stock' => 8],
    ['nom' => 'Lait', 'prix' => 4.25, 'stock' => 0],
    ['nom' => 'Fromage', 'prix' => 7.99, 'stock' => 3],
];
// TODO : utiliser foreach pour afficher chaque produit.
// TODO : afficher « En stock » ou « Rupture de stock » avec une condition.
// TODO : formater le prix avec number_format(..., 2, ',', ' ').
// TODO : échapper le nom du produit avec htmlspecialchars().
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>PHP – Cours 5</title>
    <style>
        body {
            font: 16px system-ui;
            max-width: 850px;
            margin: 35px auto;
            line-height: 1.6
        }

        section {
            padding: 12px;
            border-bottom: 1px solid #ddd
        }

        code {
            background: #eee;
            padding: 2px
        }
    </style>
</head>

<body>
    <h1>MiniShop – Catalogue</h1>
    <ul><!-- TODO : ajouter la boucle ici --></ul>
</body>

</html>