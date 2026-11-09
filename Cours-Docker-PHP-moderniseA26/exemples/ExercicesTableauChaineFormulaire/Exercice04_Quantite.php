<?php

declare(strict_types=1);

$prixUnitaire = 14.50;
// TODO : écrire votre solution ici.
$prix = 10;
$resultat = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupérer et valider un entier
    $quantite = filter_input(
        INPUT_POST,
        'quantite',
        FILTER_VALIDATE_INT
    );

    // Vérifier que la quantité est entre 1 et 20
    if ($quantite !== false && $quantite !== null && $quantite >= 1 && $quantite <= 20) {

        $total = $quantite * $prix;

        $resultat = "Quantité : $quantite. Total : $total $.";
    } else {
        $resultat = "Veuillez entrer un entier entre 1 et 20.";
    }
}
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 4 — Quantité commandée</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main class="container py-4">
        <h1>Exercice 4 — Quantité commandée</h1>
        <p>Créer un formulaire POST avec un champ <code>quantite</code>. Valider un entier de 1 à 20 avec <code>filter_input()</code> et calculer le total.</p>
        <form method="POST">
            <label for="quantite">Quantité (1 à 20) :</label>

            <input type="number" name="quantite" id="quantite">

            <button type="submit">Calculer</button>
        </form>

        <p><?= htmlspecialchars($resultat) ?></p>

    </main>
</body>

</html>